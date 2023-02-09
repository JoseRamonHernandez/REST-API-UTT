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

Route::get('alumnos_egresados', 'App\Http\Controllers\alumnosEgresadosController@getAlumnosEgresados');
Route::get('alumno_egresado/{id}', 'App\Http\Controllers\alumnosEgresadosController@getAlumnoEgresado');
Route::post('addAlumno', 'App\Http\Controllers\alumnosEgresadosController@insertEgresado');
Route::put('updateAlumno/{id}', 'App\Http\Controllers\alumnosEgresadosController@updateAlumno');
Route::delete('deleteAlumno/{id}', 'App\Http\Controllers\alumnosEgresadosController@deleteAlumno');