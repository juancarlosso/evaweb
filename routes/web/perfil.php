<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::group(['middleware' => ['auth']], function () {
     Route::get('perfil', [PerfilController::class, 'show'])->name('perfil.show');
     Route::post('perfil/update', [PerfilController::class, 'update'])->name('perfil.update');

     Route::get('cambiar-password', [PerfilController::class, 'cambiarPassword'])->name('perfil.cambiar.password');
     Route::post('perfil/update/password', [PerfilController::class, 'updatePassword'])->name('perfil.update.pwd');
});