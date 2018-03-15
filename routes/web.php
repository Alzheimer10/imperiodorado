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

Route::get('/', 'imperiodoradoController@home')->name('/');
Route::get('/contacto', 'imperiodoradoController@contacto')->name('contacto');
Route::get('/noticias', 'imperiodoradoController@noticias')->name('noticias');
Route::get('/empresa', 'imperiodoradoController@empresa')->name('empresa');
