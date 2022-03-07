<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/puntaje','App\Http\Controllers\Puntaje@index');
Route::get('/puntajsse','App\Http\Controllers\Puntaje@create');
Route::get('/puntaje/{id}','App\Http\Controllers\Puntaje@show');
Route::get('/clientes','App\Http\Controllers\ClientesController@index');

Route::post('/clientes','App\Http\Controllers\ClientesController@store');
Route::put('/clientes/{id}','App\Http\Controllers\ClientesController@update');
Route::delete('/clientes/{id}','App\Http\Controllers\ClientesController@destroy');