<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TotpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminPerfilController extends Controller
{
    /**
     * Muestra la vista de Perfil de Usuario y configuración de MFA.
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.perfil.index', compact('user'));
    }

    /**
     * Actualiza la información básica del perfil (Nombre y Correo).
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.unique' => 'Este correo electrónico ya está registrado por otro usuario.',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Perfil actualizado exitosamente.');
    }

    /**
     * Actualiza la contraseña de acceso del usuario.
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'Ingresa tu contraseña actual.',
            'password.required' => 'Ingresa la nueva contraseña.',
            'password.min' => 'La nueva contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'La contraseña actual ingresada es incorrecta.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', '¡Tu contraseña ha sido actualizada con éxito!');
    }

    /**
     * Genera la clave secreta y los datos para vincular Google Authenticator.
     */
    public function getTotpSetupData(Request $request)
    {
        $user = Auth::user();
        $secret = TotpService::generateSecret(16);
        
        session(['temp_totp_secret' => $secret]);

        $otpUrl = TotpService::getOtpAuthUrl($user->email, $secret, 'EKSA');
        $qrUrl = TotpService::getQrCodeUrl($otpUrl, 220);
        $formattedSecret = TotpService::formatSecret($secret);

        return response()->json([
            'success' => true,
            'secret' => $secret,
            'formatted_secret' => $formattedSecret,
            'qr_url' => $qrUrl,
            'otp_url' => $otpUrl,
        ]);
    }

    /**
     * Confirma la activación de Google Authenticator validando el código de 6 dígitos.
     */
    public function confirmTotpActivation(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'code' => 'required|string|size:6',
        ], [
            'code.required' => 'Ingresa el código de 6 dígitos de Google Authenticator.',
            'code.size' => 'El código debe tener exactamente 6 dígitos.',
        ]);

        $tempSecret = session('temp_totp_secret');
        if (!$tempSecret) {
            return back()->withErrors(['code' => 'La sesión de configuración expiró. Por favor intenta vincular nuevamente la app.']);
        }

        if (!TotpService::verifyCode($tempSecret, $request->code)) {
            return back()->with('totp_modal_open', true)
                ->withErrors(['code' => 'El código de 6 dígitos ingresado es incorrecto o está desfasado. Asegúrate de ingresar el código actual que muestra Google Authenticator.']);
        }

        // Guardar en base de datos
        TotpService::saveUserSecret($user->id, $tempSecret);
        $user->nivel = 2; // Nivel 2: Google Authenticator
        $user->save();

        session(['mfa_verified' => true]);
        session()->forget('temp_totp_secret');

        return back()->with('success', '¡Google Authenticator ha sido configurado y activado exitosamente en tu cuenta!');
    }

    /**
     * Envía un código OTP al correo para validar la activación de MFA por Correo (Alternativa).
     */
    public function sendMfaActivationCode(Request $request)
    {
        $user = Auth::user();
        $otpCode = (string) random_int(100000, 999999);

        session([
            'mfa_activation_code' => $otpCode,
            'mfa_activation_expires' => now()->addMinutes(10),
        ]);

        try {
            Mail::send('emails.admin_mfa_code', ['user' => $user, 'code' => $otpCode], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Código para activar Autenticación en Dos Pasos (MFA) - EKSA');
            });
        } catch (\Exception $e) {
            return back()->with('error', 'No se pudo enviar el correo de activación. Inténtalo más tarde.');
        }

        return back()->with('mfa_modal_open', true)
            ->with('info', 'Hemos enviado un código de 6 dígitos a tu correo (' . $user->email . '). Ingrésalo a continuación para activar el MFA.');
    }

    /**
     * Confirma la activación de MFA por correo.
     */
    public function confirmMfaActivation(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'code' => 'required|string|size:6',
        ], [
            'code.required' => 'Ingresa el código de 6 dígitos.',
            'code.size' => 'El código debe tener exactamente 6 dígitos.',
        ]);

        $sessionCode = session('mfa_activation_code');
        $sessionExpires = session('mfa_activation_expires');

        if (!$sessionCode || !$sessionExpires || now()->isAfter($sessionExpires)) {
            return back()->with('mfa_modal_open', true)
                ->withErrors(['code' => 'El código de activación ha expirado. Por favor solicita uno nuevo.']);
        }

        if ($request->code !== $sessionCode) {
            return back()->with('mfa_modal_open', true)
                ->withErrors(['code' => 'El código ingresado es incorrecto.']);
        }

        // Activar MFA por correo (Nivel 1)
        $user->nivel = 1;
        $user->save();

        session(['mfa_verified' => true]);
        session()->forget(['mfa_activation_code', 'mfa_activation_expires']);

        return back()->with('success', '¡Autenticación en dos pasos por correo activada con éxito!');
    }

    /**
     * Desactiva cualquier método de MFA en la cuenta del usuario.
     */
    public function deactivateMfa(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'password_confirm' => 'required|string',
        ], [
            'password_confirm.required' => 'Ingresa tu contraseña para confirmar la desactivación del MFA.',
        ]);

        if (!Hash::check($request->password_confirm, $user->password)) {
            return back()->withErrors(['password_confirm' => 'La contraseña ingresada es incorrecta.']);
        }

        $user->nivel = 0;
        $user->save();

        TotpService::disableUserSecret($user->id);

        return back()->with('success', 'El doble factor de autenticación (MFA) ha sido desactivado.');
    }
}
