<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('usuarios', UserController::class );
    //  Route::post('usuarios/cambiar/password', [App\Http\Controllers\UserController::class, 'cambiaPwd'])->name('usuarios.cambiapwd');
});