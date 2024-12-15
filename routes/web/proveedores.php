<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;


Route::group(['middleware' => ['auth']], function () {
     Route::resource('proveedores', ProveedorController::class );
});