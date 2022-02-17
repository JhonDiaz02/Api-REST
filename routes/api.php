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

Route::get('/autor','App\Http\Controllers\AutorController@index'); //mostrar los registros
Route::post('/autor','App\Http\Controllers\AutorController@store'); //crear un registro
Route::put('/autor/{id}','App\Http\Controllers\AutorController@update'); //actualizar un registro
Route::delete('/autor/{id}','App\Http\Controllers\AutorController@destroy'); //borrar n registro