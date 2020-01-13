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
})->name('welcome');

Route::get('/registro',function(){
    return view('registrar');
})->name('registro');

Route::get('/infGeneral', function(){
    return view('info.infgeneral');
})->name('infgeneral');

Route::post('/comentario','ContactoController@store')->name('guardarcontacto');

Route::get('/gestionUsuario','GestionUsuarioController@SacarUser')->name('GestionUsuario');

Route::post('/modificarUsuario','GestionUsuarioController@ModUser')->name('ModificarUsuario');

/*Route::post('/registro/guardar', 'Auth\RegisterController@create')->name('guardarregistro');

Route::post('/iniciosesion', 'HomeController@index')->name('iniciarsesion');*/



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');

///////ZONA ADMINISTRADOR//////////

  ////GESTION DE USUARIOS/////

Route::get('/usuarios','GestionUsuarioController@index')->name('mostrarUsuarios'); //Mostrar usuarios editar y eliminar

Route::get('/mostrarUsuario/{id}','GestionUsuarioController@show')->name('mostrarUsuario');//Datos de usuario

Route::post('/editarUsuario/{id}','GestionUsuarioController@Alter')->name('editarUsuario');//Editar usuario

Route::get('/eliminarUsuario/{id}','GestionUsuarioController@DeleteUser')->name('eliminarUsuario');//Eliminar usuario

  ////GESTION DE MENSAJES/////

Route::get('/GestionMensajes','ContactoController@index')->name('mostrarMensajes');

Route::get('/GestionMensajes/{id}','ContactoController@destroy')->name('eliminarMensaje');

  ////GESTION DE OFERTAS////

