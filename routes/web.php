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



Route::get('/index', 'Contoh@index');
Route::get('/tambah', 'Contoh@tambah');
Route::get('/view', 'Contoh@view');
Route::get('/halaman2', 'Contoh@halaman2');
Route::get('/halaman3', 'Contoh@halaman3');
Route::get('/mahasiswa', 'Contoh@mahasiswa');
Route::resource('mahasiswa','Mahasiswa');