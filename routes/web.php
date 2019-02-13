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
Route::resource('/EstudiosBasicos', 'EstudiosBasicosController');
Route::resource('/EstudiosSuperiores', 'EstudiosSuperioresController');
Route::resource('/OtrosEstudios', 'OtrosEstudiosController');
/*
Route::get('/estudiosbasicos', 'EstudiosBasicosController@index');
Route::get('/crearestudiosbasicos', 'EstudiosBasicosController@create');
Route::get('/insertarestudiosbasicos', 'EstudiosBasicosController@store');
Route::get('/actualizarestudiosbasicos', 'EstudiosBasicosController@update');
Route::get('/borrarestudiosbasicos', 'EstudiosBasicosController@destroy');

*/




Auth::routes();*/

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
=======
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
Route::get('/listarTipoIdioma', 'DatosController@listarTipoIdiomas')->name('datos.listarTipoIdiomas');
//Route::get('/datos/listar','DatosController@listarIdiomas')->name('datos.listarIdiomas');
//Route::resource('/idioma','IdiomaController');
>>>>>>> 111fa53aa521bb39f92b2f7f4026c3e6d16b69f7
