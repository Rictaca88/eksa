<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('index2');
})->name('home');

Route::get('/medicinal', function () {
  return view('medicinal');
})->name('medicinal');

Route::get('/industrial', function () {
  return view('industrial');
})->name('industrial');

//Route::get('/index', function () {
//  return view('index2');
//})->name('index');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto');

/*
|--------------------------------------------------------------------------
| Rutas del Panel Administrativo: "Desktop"
|--------------------------------------------------------------------------
| Aislado de la web pública con autenticación, MFA y gestión de contactos.
*/
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminContactoController;
use App\Http\Controllers\Admin\AdminPerfilController;

Route::prefix('desktop')->group(function () {
    // Autenticación & MFA
    Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::get('/mfa/verify', [AdminAuthController::class, 'showMfaVerify'])->name('admin.mfa.verify');
    Route::post('/mfa/verify', [AdminAuthController::class, 'verifyMfa'])->name('admin.mfa.verify.post');
    Route::post('/mfa/resend', [AdminAuthController::class, 'resendMfa'])->name('admin.mfa.resend');
    Route::post('/mfa/fallback-email', [AdminAuthController::class, 'mfaFallbackEmail'])->name('admin.mfa.fallback');

    // Recuperación de Contraseña
    Route::get('/password/reset', [AdminAuthController::class, 'showForgotPassword'])->name('admin.password.request');
    Route::post('/password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset/{token}', [AdminAuthController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('/password/reset', [AdminAuthController::class, 'resetPassword'])->name('admin.password.update');

    // Rutas Protegidas (Requieren autenticación activa y verificación de MFA)
    Route::middleware(['admin.auth'])->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Módulo de Contactos
        Route::get('/contactos', [AdminContactoController::class, 'index'])->name('admin.contactos');
        Route::get('/contactos/{id}', [AdminContactoController::class, 'show'])->name('admin.contactos.show');
        Route::post('/contactos/{id}/estado', [AdminContactoController::class, 'toggleEstado'])->name('admin.contactos.estado');

        // Módulo de Perfil de Usuario & MFA
        Route::get('/perfil', [AdminPerfilController::class, 'index'])->name('admin.perfil');
        Route::post('/perfil/datos', [AdminPerfilController::class, 'updateProfile'])->name('admin.perfil.update');
        Route::post('/perfil/password', [AdminPerfilController::class, 'updatePassword'])->name('admin.perfil.password');
        Route::post('/perfil/mfa/totp-setup', [AdminPerfilController::class, 'getTotpSetupData'])->name('admin.perfil.totp.setup');
        Route::post('/perfil/mfa/totp-confirm', [AdminPerfilController::class, 'confirmTotpActivation'])->name('admin.perfil.totp.confirm');
        Route::post('/perfil/mfa/send-code', [AdminPerfilController::class, 'sendMfaActivationCode'])->name('admin.perfil.mfa.send');
        Route::post('/perfil/mfa/confirm', [AdminPerfilController::class, 'confirmMfaActivation'])->name('admin.perfil.mfa.confirm');
        Route::post('/perfil/mfa/deactivate', [AdminPerfilController::class, 'deactivateMfa'])->name('admin.perfil.mfa.deactivate');
    });
});
