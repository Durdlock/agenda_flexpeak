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
    return view('index');
});
Route::get('/contatos','ControladorContato@index');
Route::post('/contatos','ControladorContato@store');
Route::get('/contatos/novo','ControladorContato@create');
Route::get('/contatos/apagar/{id}','ControladorContato@destroy');
Route::get('/contatos/editar/{id}','ControladorContato@edit');
Route::post('/contatos/{id}','ControladorContato@update');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
