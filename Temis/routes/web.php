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

Route::get('/processo', 'ProcessoController@index');
Route::get('/processo/create', 'ProcessoController@create');
Route::post('/processo/store', 'ProcessoController@store');
Route::get('/processo/{processo}/show', 'ProcessoController@show');
Route::get('/processo/{processo}/edit', 'ProcessoController@edit');
Route::put('/processo/{processo}/update', 'ProcessoController@update');
Route::delete('/processo/{processo}/destroy', 'ProcessoController@update');

Route::get('/tProcesso', 'TPController@index');
Route::post('/tProcesso/busca', 'TPController@busca')->name('tProcesso.busca');

Route::get('/usuario/{usuario}/edit', 'UsuarioController@edit');
Route::put('/usuario/{usuario}/update', 'UsuarioController@update');
Route::delete('/usuario/{usuario}/destroy', 'UsuarioController@update');

Route::get('/tUsuario', 'TUController@index');
Route::post('/tUsuario/busca', 'TUController@busca')->name('tUsuario.busca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

