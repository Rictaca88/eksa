<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\TotpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminAuthController extends Controller
{
    /**
     * Muestra la vista de login.
     */
    public function showLoginForm()
    {
        if (Auth::check() && session('mfa_verified') === true) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    /**
     * Procesa el inicio de sesión.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'Ingresa un formato de correo válido.',
            'password.required' => 'La contraseña es requerida.',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'estado' => 1,
        ];

        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Si el usuario tiene MFA con Google Authenticator (nivel == 2)
            if ($user->nivel == 2) {
                session([
                    'mfa_verified' => false,
                    'mfa_type' => 'totp',
                ]);

                return redirect()->route('admin.mfa.verify')
                    ->with('info', 'Ingresa el código de 6 dígitos que muestra tu app Google Authenticator.');
            }

            // Si el usuario tiene MFA por Correo Electrónico (nivel == 1)
            if ($user->nivel == 1) {
                $otpCode = (string) random_int(100000, 999999);
                session([
                    'mfa_verified' => false,
                    'mfa_type' => 'email',
                    'mfa_otp_code' => $otpCode,
                    'mfa_otp_expires' => now()->addMinutes(10),
                ]);

                try {
                    Mail::send('emails.admin_mfa_code', ['user' => $user, 'code' => $otpCode], function ($message) use ($user) {
                        $message->to($user->email)
                            ->subject('Tu código de seguridad MFA - EKSA');
                    });
                } catch (\Exception $e) {
                    // Continuar si falla el transporte smtp en desarrollo
                }

                return redirect()->route('admin.mfa.verify')
                    ->with('info', 'Se ha enviado un código de seguridad de 6 dígitos a tu correo (' . $user->email . ').');
            }

            // Si no tiene MFA (nivel == 0), acceso directo
            session(['mfa_verified' => true]);
            return redirect()->route('admin.dashboard')
                ->with('success', '¡Bienvenido(a) ' . $user->name . '!');
        }

        return back()->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'Las credenciales ingresadas son incorrectas o la cuenta está inactiva.']);
    }

    /**
     * Muestra la pantalla para ingresar el código MFA.
     */
    public function showMfaVerify()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        if (session('mfa_verified') === true) {
            return redirect()->route('admin.dashboard');
        }

        $user = Auth::user();
        $mfaType = session('mfa_type', ($user->nivel == 2 ? 'totp' : 'email'));

        return view('admin.auth.mfa-verify', compact('user', 'mfaType'));
    }

    /**
     * Valida el código OTP de MFA (TOTP o Correo).
     */
    public function verifyMfa(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'code' => 'required|string|size:6',
        ], [
            'code.required' => 'Ingresa el código de 6 dígitos.',
            'code.size' => 'El código debe tener exactamente 6 dígitos.',
        ]);

        $user = Auth::user();
        $mfaType = session('mfa_type', ($user->nivel == 2 ? 'totp' : 'email'));

        if ($mfaType === 'totp') {
            $secret = TotpService::getUserSecret($user->id);
            if (!$secret || !TotpService::verifyCode($secret, $request->code)) {
                return back()->withErrors(['code' => 'El código de 6 dígitos ingresado es incorrecto o está desfasado. Abre Google Authenticator e ingresa el código actual.']);
            }
        } else {
            // Verificación por correo
            $sessionCode = session('mfa_otp_code');
            $sessionExpires = session('mfa_otp_expires');

            if (!$sessionCode || !$sessionExpires || now()->isAfter($sessionExpires)) {
                return back()->withErrors(['code' => 'El código ha expirado. Por favor solicita uno nuevo.']);
            }

            if ($request->code !== $sessionCode) {
                return back()->withErrors(['code' => 'El código ingresado es incorrecto.']);
            }
        }

        // Código válido
        session(['mfa_verified' => true]);
        session()->forget(['mfa_otp_code', 'mfa_otp_expires', 'mfa_type']);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Autenticación completada con éxito.');
    }

    /**
     * Reenvía un nuevo código OTP por correo.
     */
    public function resendMfa(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $user = Auth::user();
        $otpCode = (string) random_int(100000, 999999);

        session([
            'mfa_type' => 'email',
            'mfa_otp_code' => $otpCode,
            'mfa_otp_expires' => now()->addMinutes(10),
        ]);

        try {
            Mail::send('emails.admin_mfa_code', ['user' => $user, 'code' => $otpCode], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Nuevo código de seguridad MFA - EKSA');
            });
        } catch (\Exception $e) {
            return back()->with('error', 'No se pudo enviar el correo en este momento. Inténtalo nuevamente.');
        }

        return back()->with('success', 'Hemos reenviado un nuevo código de 6 dígitos a tu correo.');
    }

    /**
     * Fallback: Envía un código OTP por correo para usuarios con Google Authenticator.
     */
    public function mfaFallbackEmail(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $user = Auth::user();
        $otpCode = (string) random_int(100000, 999999);

        session([
            'mfa_type' => 'email',
            'mfa_otp_code' => $otpCode,
            'mfa_otp_expires' => now()->addMinutes(10),
        ]);

        try {
            Mail::send('emails.admin_mfa_code', ['user' => $user, 'code' => $otpCode], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Código de emergencia MFA - EKSA');
            });
        } catch (\Exception $e) {
            return back()->with('error', 'No se pudo enviar el código de respaldo por correo. Inténtalo más tarde.');
        }

        return redirect()->route('admin.mfa.verify')
            ->with('info', 'Hemos enviado un código de seguridad de emergencia a tu correo registrado (' . $user->email . ').');
    }

    /**
     * Cierra la sesión administrativa.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Has cerrado sesión correctamente.');
    }

    /**
     * Muestra la vista de solicitar recuperación de contraseña.
     */
    public function showForgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    /**
     * Envía el enlace de recuperación de contraseña por correo.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Ingresa tu correo electrónico.',
            'email.email' => 'Ingresa un formato de correo válido.',
        ]);

        $user = User::where('email', $request->email)->where('estado', 1)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No encontramos un usuario activo con ese correo electrónico.']);
        }

        $token = Str::random(64);

        // Guardar o actualizar en password_resets
        DB::table('password_resets')->where('email', $user->email)->delete();
        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => Hash::make($token),
            'created_at' => now(),
        ]);

        $resetUrl = route('admin.password.reset', ['token' => $token, 'email' => $user->email]);

        try {
            Mail::send('emails.admin_password_reset', ['user' => $user, 'resetUrl' => $resetUrl], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Recuperación de Contraseña - EKSA Panel');
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Error al despachar el correo: ' . $e->getMessage());
        }

        return back()->with('success', 'Te hemos enviado un correo con las instrucciones para restablecer tu contraseña.');
    }

    /**
     * Muestra el formulario para asignar la nueva contraseña.
     */
    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('admin.auth.reset-password', compact('token', 'email'));
    }

    /**
     * Procesa el cambio de contraseña con el token.
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.required' => 'La nueva contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        ]);

        $record = DB::table('password_resets')->where('email', $request->email)->first();

        if (!$record || !Hash::check($request->token, $record->token)) {
            return back()->withErrors(['email' => 'El enlace de recuperación es inválido o ha expirado.']);
        }

        // Verificar expiración (60 minutos)
        if (now()->diffInMinutes($record->created_at) > 60) {
            DB::table('password_resets')->where('email', $request->email)->delete();
            return back()->withErrors(['email' => 'El enlace de recuperación ha expirado.']);
        }

        // Actualizar contraseña
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        // Eliminar token usado
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('admin.login')
            ->with('success', '¡Tu contraseña ha sido actualizada con éxito! Ya puedes iniciar sesión.');
    }
}
