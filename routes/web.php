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

// Route::get('/asientos', 'AsientosController@index');
// Route::get('/asientos/create', 'AsientosController@create');
// Route::get('/asientos/edit', 'AsientosController@edit');
Route::resource('asientos', 'AsientosController');

// Route::get('/rutas', 'RutasController@index');
// Route::get('/rutas/create', 'RutasController@create');
// Route::get('/rutas/edit', 'RutasController@edit');
Route::resource('rutas', 'RutasController');

// Route::get('/sitios', 'SitiosController@index');
// Route::get('/sitios/create', 'SitiosController@index@create');
// Route::get('/sitios/edit', 'SitiosController@index@edit');
Route::resource('Sitios', 'SitiosController');

// Route::get('/viajes', 'ViajesController@index');
// Route::get('/viajes/create', 'ViajesController@create');
// Route::get('/viajes/edit', 'ViajesController@edit');
Route::resource('viajes', 'viajesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
