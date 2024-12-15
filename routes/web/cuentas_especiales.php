<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuentasEspecialesController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('cuentas_especiales', CuentasEspecialesController::class);
});