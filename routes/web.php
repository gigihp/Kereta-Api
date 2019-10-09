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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/blog', function () {
    return view('blog');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/beranda', 'BerandaController@index');
Route::get('/', 'BerandaController@kota');

Route::get('/pencarian', 'PencarianController@index');

Route::get('/pesan', 'PesanController@index');

Route::get('/search', 'BerandaController@getApi')->name('search.api');
