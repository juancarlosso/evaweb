<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AseguradoraController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('aseguradoras', AseguradoraController::class );
});