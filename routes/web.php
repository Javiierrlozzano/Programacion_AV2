<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('DataCreditos','App\Http\Controllers\DataCreditosController@store');
Route::get('/', function () {
    return view('map');
});
Route::get('plantilla', function () {
    return view('platilla');
});

Route::get('map', function () {
    return view('map');
});
Route::get('home', function () {
    return view('map');
});
Route::get('home', function () {
    return view('map');
});




Auth::routes();

Route::resource('DataCreditos', App\Http\Controllers\DataCreditosController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('ingresos', App\Http\Controllers\IngresoController::class);

Route::resource('pagos', App\Http\Controllers\PagoController::class);
Route::resource('billeteras', App\Http\Controllers\BilleteraController::class);
Route::resource('creditos', App\Http\Controllers\CreditoController::class);
Route::get('platilla', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
