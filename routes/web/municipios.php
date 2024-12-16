<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('municipios', MunicipioController::class);
});