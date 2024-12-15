<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('cuentas_especiales', ClienteController::class);
});