<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasificacionController;


Route::group(['middleware' => ['auth']], function () {

	Route::get('/clasificaciones/{tipo}', [ClasificacionController::class, 'index'])->name('clasificaciones.index');
	Route::post('/clasificaciones', ClasificacionController::class . '@store')->name('clasificaciones.store');
	// returns a page that shows a full post
	Route::get('/clasificaciones/{id}', ClasificacionController::class . '@show')->name('clasificaciones.show');
	// returns the form for editing a post
	Route::get('/clasificaciones/{id}/{tipo}/edit', ClasificacionController::class . '@edit')->name('clasificaciones.edit');
	// updates a post
	Route::put('/clasificaciones/{id}', ClasificacionController::class . '@update')->name('clasificaciones.update');
	// deletes a post
	Route::delete('/clasificaciones/{id}', ClasificacionController::class . '@destroy')->name('clasificaciones.destroy');
});
