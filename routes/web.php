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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('helo', function () {
    return 'Hello Laravel';
});

//route untuk memanggil view form.php
Route::get('/form', function () {
    return view('form');
});

Route::resource('article', 'ArticleController');

Route::get('/article/cari','ArticleController@cari');

Route::get('/home', 'HomeController@index')->name('home');
