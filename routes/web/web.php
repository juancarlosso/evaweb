<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngresosController;

Route::get('/ingresos', [IngresosController::class, 'index']);
Route::post('/ingresos', [IngresosController::class, 'store'])->name('ingresos.store');
Route::get('/ingresos/pdf', [IngresosController::class, 'createPDF']);
Route::get('ingresospdf', function () {
    return view('reportes.pdf.ingresos');
});