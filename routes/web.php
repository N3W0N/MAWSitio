<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Sitio;

Route::get('/', function () {
    return view('Inicio');
})->name('Inicio');
Route::get('/Catalogo', [Sitio::class, 'Catalogo'])->name('Catalogo');
Route::get('/Productos/{Seccion}/{Producto}', [Sitio::class, 'Productos'])->name('Productos');
Route::get('/Servicios/{Servicio}/{Imagen}', [Sitio::class, 'Servicios'])->name('Servicios');
Route::get('/Resultados', [Sitio::class, 'Resultado'])->name('Resultados');
Route::get('/AboutUs', [Sitio::class, 'AboutUs'])->name('AboutUs');