<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('estados', EstadoController::class);
});