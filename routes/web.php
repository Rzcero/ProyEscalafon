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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();*/

Route::get('/home', 'HomeController@index')->name('home');

//Rutas para Datos Personales:
//Route::get('/datos/listar', 'DatosPersonalesController@index');
/*Route::get('/datos', 'DatosPersonalesController@index');
Route::get('/crear', 'DatosPersonalesController@create');
Route::get('/actualizar', 'DatosPersonalesController@update');
Route::get('/insertar', 'DatosPersonalesController@insert');
Route::get('/eliminar', 'DatosPersonalesController@delete');*/

Route::resource('/datos','DatosController');
Route::get('/listarIdiomas', 'DatosController@listarIdiomas')->name('datos.listarIdiomas');
Route::get('/listarHabientes', 'DatosController@listarHabientes')->name('datos.listarHabientes');
Route::get('/listarTipoDocIdentidad', 'DatosController@listarTipoDocIdentidad')->name('datos.listarTipoDocIdentidad');
Route::get('/listarEstadoCivil', 'DatosController@listarEstadoCivil')->name('datos.listarEstadoCivil');
Route::get('/listarTipoVia', 'DatosController@listarTipoVia')->name('datos.listarTipoVia');
Route::get('/listarTipoZona', 'DatosController@listarTipoZona')->name('datos.listarTipoZona');
Route::get('/listarTipoIdioma', 'DatosController@listarTipoIdiomas')->name('datos.listarTipoIdiomas');

Route::post('/agregarIdioma', 'DatosController@agregarIdioma')->name('datos.agregarIdioma');
//Route::get('/datos/listar','DatosController@listarIdiomas')->name('datos.listarIdiomas');
//Route::resource('/idioma','IdiomaController');