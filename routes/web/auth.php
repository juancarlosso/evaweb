<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| RUTAS PARA EL ACCESO AL SISTEMA Y RECUPERAR CONTRASEÑA
|--------------------------------------------------------------------------
*/
Route::get('login', [CustomAuthController::class, 'showLogin'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('forgot-password', [CustomAuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('recover-password', [CustomAuthController::class, 'recoverPassword'])->name('recover-password');

Route::get('change-password/{id}/{token}',[CustomAuthController::class, 'changePassword'])->name('change-password');
Route::post('change-password-update', [CustomAuthController::class, 'changePasswordUpdate'])->name('change-password-update');

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('codigo-activacion/{id}/{token}', [CustomAuthController::class, 'capturaCodigo'])->name('captura-codigo-activacion');
Route::get('codigo-activacion/{id}/{token}/reenviar', [CustomAuthController::class, 'reenviarCodigo'])->name('reenviar-codigo-activacion');
Route::post('codigo-activacion/validar', [CustomAuthController::class, 'validarCodigo'])->name('validar-codigo-activacion');

