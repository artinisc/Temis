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

Route::get('/', 'InicioController@index');
Route::get('/home', 'HomeController@index');

Route::get('/processo/create', 'ProcessoController@create');
Route::post('/processo/store', 'ProcessoController@store')->name('processo.store');
Route::get('/processo/{processo}/show', 'ProcessoController@show')->name('processo.show');
Route::get('/processo/{processo}/edit', 'ProcessoController@edit')->name('processo.edit');
Route::put('/processo/{processo}/update', 'ProcessoController@update')->name('processo.update');

Route::get('/tProcesso', 'TPController@index');
Route::post('/tProcesso/busca', 'TPController@busca')->name('tProcesso.busca');

Route::get('/usuario/{usuario}/edit', 'usuarioController@edit')->name('usuario.edit');
Route::put('/usuario/{usuario}/update', 'usuarioController@update')->name('usuario.update');

Route::get('/tUsuario', 'TUController@index');
Route::post('/tUsuario/busca', 'TUController@busca')->name('tUsuario.busca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

