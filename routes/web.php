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
Route::resource('/EstudiosBasicos', 'EstudiosBasicosController');
Route::resource('/EstudiosSuperiores', 'EstudiosSuperioresController');
Route::resource('/OtrosEstudios', 'OtrosEstudiosController');
/*
Route::get('/estudiosbasicos', 'EstudiosBasicosController@index');
Route::get('/crearestudiosbasicos', 'EstudiosBasicosController@create');
Route::get('/insertarestudiosbasicos', 'EstudiosBasicosController@store');
Route::get('/actualizarestudiosbasicos', 'EstudiosBasicosController@update');
Route::get('/borrarestudiosbasicos', 'EstudiosBasicosController@destroy');






