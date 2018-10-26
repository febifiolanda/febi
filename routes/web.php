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

Route::get('/halamandua', function () {
    return view('halamandua');
});

Route::get('/halamantiga', function () {
    return view('halamantiga');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/user', function () {
    return view('user');
});
Route::get('/mahasiswa.create', function () {
    return view('create');
});

Route::get('/index', 'contoh@index');
Route::get('/tambah', 'contoh@tambah');
Route::get('/view','contoh@view');
Route::get('/halaman2','contoh@halaman2');
Route::get('/halaman3','contoh@halaman3');
Route::resource('mahasiswa','Mahasiswa');
Route::resource('view','view');
Route::resource('user','user');
