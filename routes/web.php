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

Route::get('/gestionUsuario', function(){
    return view('gestionUsuario');
})->name('gestionUsuario');

Route::post('/comentario','ContactoController@store')->name('guardarcontacto');
Route::post('/registro/guardar', 'RegistroController@store')->name('guardarregistro');

Route::get("/gestionUsuario/{id}","RegistroController@edit");
Route::post("/gestionUsuario","RegistroController@update")->name("update");