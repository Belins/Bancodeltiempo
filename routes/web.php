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

Route::get('ofertas/edit/{id}','OfertaController@MostrarOferta')->name('editaroferta')->middleware('admin');

Route::post('ofertas/edit/guardar/{id}','OfertaController@editofert')->name('guardarcambios')->middleware('admin');

Route::resource('ofertas','OfertaController')->middleware('admin');


//Confirmaciones
Route::get('/confirmations', 'ConfirmationController@index')->name('confirmations.index')->middleware('admin');
Route::get('/confirmations/create/{id}', 'ConfirmationController@createConf')->name('confirmations.createConf')->middleware('admin');
Route::get('/confirmations/aceptar/{id}', 'ConfirmationController@acept')->name('confirmations.acept')->middleware('admin');
Route::get('/confirmations/rechazar/{id}', 'ConfirmationController@refuse')->name('confirmations.refuse')->middleware('admin');
Route::get('/confirmations/trueque/{id}', 'ConfirmationController@trueque')->name('confirmations.trueque')->middleware('admin');



//Route::get('/ofertas/{id}', 'OfertaController@show')->name('ofertas.show')->middleware('admin');
//Route::get('/ofertas/create', 'OfertaController@create')->name('ofertas.create')->middleware('admin');
//Route::get('/ofertas', 'OfertaController@store')->name('ofertas.store')->middleware('admin');


Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');

///////ZONA ADMINISTRADOR//////////

  ////GESTION DE USUARIOS/////

    Route::get('/usuarios','GestionUsuarioController@index')->name('mostrarUsuarios')->middleware('zona_admin'); //Mostrar usuarios editar y eliminar

    Route::get('/mostrarUsuario/{id}','GestionUsuarioController@show')->name('mostrarUsuario')->middleware('zona_admin');//Datos de usuario

    Route::post('/editarUsuario/{id}','GestionUsuarioController@Alter')->name('editarUsuario')->middleware('zona_admin');//Editar usuario

    Route::get('/eliminarUsuario/{id}','GestionUsuarioController@DeleteUser')->name('eliminarUsuario')->middleware('zona_admin');//Eliminar usuario

    ////GESTION DE MENSAJES/////

    Route::get('/GestionMensajes','ContactoController@index')->name('mostrarMensajes')->middleware('zona_admin');

    Route::get('/GestionMensajes/{id}','ContactoController@destroy')->name('eliminarMensaje')->middleware('zona_admin');

    Route::get('/CrearEmail/{id}','EmailController@CreateEmail')->name('CrearEmail')->middleware('zona_admin');

    Route::post('/contactar/{id}', 'EmailController@contact')->name('contact')->middleware('zona_admin');

    ////GESTION DE OFERTAS////

    Route::get('/GestionOfertas','OfertaController@MostrarOfertas')->name('mostrarofertas')->middleware('zona_admin');


    //FORO//

    Route::resource('foro','ForoController')->middleware('admin');

    //// ESTADISTICAS /////

    Route::get('Estadisticas','EstadisticaController@MostarOfertasFechas')->name('sacarEstadisticas')->middleware('zona_admin');
//////////////////////////////