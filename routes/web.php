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

// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/legajosPersonales', 'LegajosPersonalesController@legajo')->name('legajosPersonales');

Route::get('/administLegajo', 'AdministracionLegajoController@admLegajo')->name('administLegajo');

Route::get('/busqtipolegajo', 'AdministracionLegajoController@busquedaPorTipoLegajo')->name('busqtipolegajo');
Route::get('/busqperscondic', 'AdministracionLegajoController@busquedaPorPersonalCondicion')->name('busqperscondic');
Route::get('/busqnombres', 'AdministracionLegajoController@busquedaPorNombres')->name('busqnombres');
Route::get('/busqDocIdentidad', 'AdministracionLegajoController@busquedaPorDocIdentidad')->name('busqDocIdentidad');

Route::get('/listarTipoLegajo', 'AdministracionLegajoController@listarTipoLegajo')->name('listarTipoLegajo');
Route::get('/listarTipoPersonal', 'AdministracionLegajoController@listarTipoPersonal')->name('listarTipoPersonal');
Route::get('/listarCondicionLegajo', 'AdministracionLegajoController@listarCondicionLegajo')->name('listarCondicionLegajo');
Route::get('/listarCondicion', 'AdministracionLegajoController@listarCondicion')->name('listarCondicion');
Route::get('/listarGrupo', 'AdministracionLegajoController@listarGrupo')->name('listarGrupo');
Route::get('/listarCategoria', 'AdministracionLegajoController@listarCategoria')->name('listarCategoria');
Route::get('/listarRegimen', 'AdministracionLegajoController@listarRegimen')->name('listarRegimen');
Route::post('/administracionLegajo', 'AdministracionLegajoController@store')->name('administracionLegajo.store');

//VISTAS DE LOS MODULOS
Route::get('/moduloinicio/{id}/editar', 'ModulosController@editar')->name('moduloinicio.editar');


//Para hacer busquedas
//Route::get('/buscar','AdministracionLegajoController@busqueda')->name('buscapersonas');

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Rutas de Datos
Route::resource('/datos','DatosController');

Route::put('/updatePersona/{id}','DatosController@updatePersona')->name('updatePersona');
Route::put('/updateSituacionLaboral/{id}','DatosController@updateSituacionLaboral')->name('updateSituacionLaboral');

Route::get('/listarIdiomas', 'DatosController@listarIdiomas')->name('datos.listarIdiomas');
Route::get('/listarTipoDocIdentidad', 'DatosController@listarTipoDocIdentidad')->name('datos.listarTipoDocIdentidad');
Route::get('/listarParentesco', 'DatosController@listarParentesco')->name('datos.listarParentesco');
Route::get('/listarEstadoCivil', 'DatosController@listarEstadoCivil')->name('datos.listarEstadoCivil');
Route::get('/listarTipoVia', 'DatosController@listarTipoVia')->name('datos.listarTipoVia');
Route::get('/listarTipoZona', 'DatosController@listarTipoZona')->name('datos.listarTipoZona');
Route::get('/listarNacionalidad', 'DatosController@listarNacionalidad')->name('datos.listarNacionalidad');
Route::get('/listarTipoIdioma', 'DatosController@listarTipoIdiomas')->name('datos.listarTipoIdiomas');
Route::get('/listarTipoDocumento', 'DatosController@listarTipoDocumento')->name('datos.listarTipoDocumento');
Route::get('/listarDepartamentoUbigeo', 'DatosController@listarDepartamentoUbigeo')->name('datos.listarDepartamentoUbigeo');
Route::get('/listarProvinciaUbigeo', 'DatosController@listarProvinciaUbigeo')->name('datos.listarProvinciaUbigeo');
Route::get('/listarDistritoUbigeo', 'DatosController@listarDistritoUbigeo')->name('datos.listarDistritoUbigeo');
Route::post('/editarIdioma', 'DatosController@editarIdioma')->name('datos.editarIdioma');
Route::post('/agregarIdioma', 'DatosController@agregarIdioma')->name('datos.agregarIdioma');
Route::post('/verIdioma', 'DatosController@verIdioma')->name('datos.verIdioma');
  //ruta eliminar idioma
Route::DELETE('/eliminarIdioma/{id}','DatosController@destroyIdioma')->name('datos.destroyIdioma');

//ruta de HABIENTES
Route::get('/listarHabientes', 'DatosController@listarHabientes')->name('datos.listarHabientes');
Route::post('/agregarHabiente', 'DatosController@agregarHabiente')->name('datos.agregarHabiente');
Route::post('/editarHabiente', 'DatosController@editarHabiente')->name('datos.editarHabiente');
Route::post('/updateHabiente/{id}','DatosController@updateHabiente')->name('updateHabiente');
  //ruta eliminar idioma
Route::DELETE('/eliminarHabiente/{id}','DatosController@destroyHabiente')->name('datos.destroyHabiente');