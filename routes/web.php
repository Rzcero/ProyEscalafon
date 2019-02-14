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
Route::resource('/Estudios', 'EstudiosController');



Route::get('/listarnivel', 'EstudiosController@listarnivel')->name('estudios.listarnivel');


/*
Route::get('/estudiosbasicos', 'EstudiosBasicosController@index');
Route::get('/crearestudiosbasicos', 'EstudiosBasicosController@create');
Route::get('/insertarestudiosbasicos', 'EstudiosBasicosController@store');
Route::get('/actualizarestudiosbasicos', 'EstudiosBasicosController@update');
Route::get('/borrarestudiosbasicos', 'EstudiosBasicosController@destroy');


Route::resource('/datos','DatosController');
Route::get('/listarIdiomas', 'DatosController@listarIdiomas')->name('datos.listarIdiomas');
Route::get('/listarHabientes', 'DatosController@listarHabientes')->name('datos.listarHabientes');
Route::get('/listarTipoIdioma', 'DatosController@listarTipoIdiomas')->name('datos.listarTipoIdiomas');

*/