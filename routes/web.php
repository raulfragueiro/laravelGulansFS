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
});*/

Route::get('/','PlayersController@index' )->name('home');


Route::get('/club', function () {
    return view('club');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/stats','PlayersController@stats' )->name('stats');

Route::get('/liga', function () {
    return view('liga');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});

Route::get('/plantilla/xoel', function () {
    return view('jugadores.xoel');
});