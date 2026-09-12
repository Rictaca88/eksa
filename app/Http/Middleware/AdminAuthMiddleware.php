<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 1. Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Debes iniciar sesión para acceder al panel.');
        }

        $user = Auth::user();

        // 2. Verificar si el usuario está activo
        if ($user->estado != 1) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('admin.login')->with('error', 'Tu cuenta se encuentra deshabilitada.');
        }

        // 3. Verificar si tiene MFA activo (nivel > 0) y si ya superó el paso MFA
        if ($user->nivel > 0 && session('mfa_verified') !== true) {
            return redirect()->route('admin.mfa.verify');
        }

        return $next($request);
    }
}

