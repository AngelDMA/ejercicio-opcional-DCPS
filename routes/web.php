<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/opciones', 'LoginController@index')->name('login');
Route::get('/registrar', 'PersonaController@registrarIndex')->name('registrar_index');
Route::get('/listar', 'PersonaController@listarIndex')->name('listar_index');
Route::get('/estadistica', 'PersonaController@estadisticaIndex')->name('estadistica_index');