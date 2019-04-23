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


//Route::get('/', 'Auth\LoginController@showLoginForm');

// Auth::routes();
//Route::get('dashboard','DashboardController@lindex');
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/*$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
/*$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');*/





Route::get('/listarnivel', 'EstudiosController@listarnivel')->name('estudios.listarnivel');
Route::get('/listarmodalidad', 'EstudiosController@listarmodalidad')->name('estudios.listarmodalidad');
Route::get('/listartipoestudios', 'EstudiosController@listartipoestudios')->name('estudios.listartipoestudios');
Route::get('/listartipodocumentos', 'EstudiosController@listartipodocumentos')->name('estudios.listartipodocumentos');
Route::get('/listartipomedio', 'EstudiosController@listartipomedio')->name('estudios.listartipomedio');
Route::get('/listarmedio', 'EstudiosController@listarmedio')->name('estudios.listarmedio');

Route::post('/guardar_otros_estudios','EstudiosController@guardar_otros_estudios')->name('estudios.guardar_otros_estudios');
Route::post('/guardar_produccion_intelectual','EstudiosController@guardar_produccion_intelectual')->name('estudios.guardar_produccion_intelectual');
Route::post('/guardar_estudios_superiores','EstudiosController@guardar_estudios_superiores')->name('estudios.guardar_estudios_superiores');
               //(/ruta que va en el navegador, controlador@funcion) ->

Route::get('/listarotrosestudios', 'EstudiosController@listarotrosestudios')->name('estudios.listarotrosestudios');
Route::get('/listarproduccion', 'EstudiosController@listarproduccion')->name('estudios.listarproduccion');
Route::get('/listarestudiossuperiores', 'EstudiosController@listarestudiossuperiores')->name('estudios.listarestudiossuperiores');

Route::get('/listartipogrados', 'EstudiosController@listartipogrados')->name('estudios.listartipogrados');

Route::post('/editar_modal_otros_estudios', 'EstudiosController@editar_modal_otros_estudios')->name('estudios.editar_modal_otros_estudios');
Route::post('/ver_otros_estudios', 'EstudiosController@ver_otros_estudios')->name('estudios.ver_otros_estudios');
Route::DELETE('/destroyOTrosEStudios/{id}', 'EstudiosController@destroyOTrosEStudios')->name('estudios.destroyOTrosEStudios');
//post porque voy a editar en la base de dato


Route::post('/editar_modal_prod_intel', 'EstudiosController@editar_modal_prod_intel')->name('estudios.editar_modal_prod_intel');
Route::post('/ver_produccion_intelecual', 'EstudiosController@ver_produccion_intelecual')->name('estudios.ver_produccion_intelecual');
Route::DELETE('/destroyProduccionIntelectual/{id}', 'EstudiosController@destroyProduccionIntelectual')->name('estudios.destroyProduccionIntelectual');
Route::put('/updateProduccionIntelectual/{id}','EstudiosController@updateProduccionIntelectual')->name('updateProduccionIntelectual');



Route::post('/editar_modal_estu_supe', 'EstudiosController@editar_modal_estu_supe')->name('estudios.editar_modal_estu_supe');
Route::put('/updateEstudiosSuperiores/{id}','EstudiosController@updateEstudiosSuperiores')->name('updateEstudiosSuperiores');
Route::post('/ver_EstudiosSuperiores', 'EstudiosController@ver_EstudiosSuperiores')->name('estudios.ver_EstudiosSuperiores');
Route::DELETE('/destroyEstudiosSuperiores/{id}', 'EstudiosController@destroyEstudiosSuperiores')->name('estudios.destroyEstudiosSuperiores');



/*
Route::get('/estudiosbasicos', 'EstudiosBasicosController@index');
Route::get('/crearestudiosbasicos', 'EstudiosBasicosController@create');
Route::get('/insertarestudiosbasicos', 'EstudiosBasicosController@store');
Route::get('/actualizarestudiosbasicos', 'EstudiosBasicosController@update');
Route::get('/borrarestudiosbasicos', 'EstudiosBasicosController@destroy');



//Rutas de Datos
Route::resource('/datos','DatosController');
Route::get('/listarIdiomas', 'DatosController@listarIdiomas')->name('datos.listarIdiomas');
Route::get('/listarHabientes', 'DatosController@listarHabientes')->name('datos.listarHabientes');
Route::get('/listarTipoDocIdentidad', 'DatosController@listarTipoDocIdentidad')->name('datos.listarTipoDocIdentidad');
Route::get('/listarEstadoCivil', 'DatosController@listarEstadoCivil')->name('datos.listarEstadoCivil');
Route::get('/listarTipoVia', 'DatosController@listarTipoVia')->name('datos.listarTipoVia');
Route::get('/listarTipoZona', 'DatosController@listarTipoZona')->name('datos.listarTipoZona');
Route::get('/listarTipoIdioma', 'DatosController@listarTipoIdiomas')->name('datos.listarTipoIdiomas');


*/

Route::get('/listarTipoDocumento', 'DatosController@listarTipoDocumento')->name('datos.listarTipoDocumento');
Route::get('/listarDepartamentoUbigeo', 'DatosController@listarDepartamentoUbigeo')->name('datos.listarDepartamentoUbigeo');
Route::get('/listarProvinciaUbigeo', 'DatosController@listarProvinciaUbigeo')->name('datos.listarProvinciaUbigeo');
Route::get('/listarDistritoUbigeo', 'DatosController@listarDistritoUbigeo')->name('datos.listarDistritoUbigeo');
Route::post('/editarIdioma', 'DatosController@editarIdioma')->name('datos.editarIdioma');
Route::post('/agregarIdioma', 'DatosController@agregarIdioma')->name('datos.agregarIdioma');
Route::post('/verIdioma', 'DatosController@verIdioma')->name('datos.verIdioma');

//ruta eliminar idioma
Route::DELETE('/eliminarIdioma/{id}','DatosController@destroyIdioma')->name('datos.destroyIdioma');

//Route::get('/datos/listar','DatosController@listarIdiomas')->name('datos.listarIdiomas');
//Route::resource('/idioma','IdiomaController');

