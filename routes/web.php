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
Route::get('/listarmodalidad', 'EstudiosController@listarmodalidad')->name('estudios.listarmodalidad');
Route::get('/listartipoestudios', 'EstudiosController@listartipoestudios')->name('estudios.listartipoestudios');
Route::get('/listartipodocumentos', 'EstudiosController@listartipodocumentos')->name('estudios.listartipodocumentos');
Route::get('/listartipomedio', 'EstudiosController@listartipomedio')->name('estudios.listartipomedio');
Route::get('/listarmedio', 'EstudiosController@listarmedio')->name('estudios.listarmedio');

Route::post('/guardar_otros_estudios','EstudiosController@guardar_otros_estudios')->name('estudios.guardar_otros_estudios');
Route::post('/guardar_produccion_intelectual','EstudiosController@guardar_produccion_intelectual')->name('estudios.guardar_produccion_intelectual');


Route::get('/listarotrosestudios', 'EstudiosController@listarotrosestudios')->name('estudios.listarotrosestudios');

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