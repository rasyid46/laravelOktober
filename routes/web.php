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

Route::get('/', 'HomesController@index');
Route::get('/post', 'HomesController@post')->name('blog');
// Route::get('/about', 'HomesController@about')->name('about');
Route::get('/contact', 'HomesController@contact')->name('contact');
Route::post('/kirim','HomesController@simpan');
Route::get('/newForm','HomesController@newForm')->name('newForm');
Route::post('/simpan','HomesController@store');
Route::get('/formEdit/{id}','HomesController@editForm');
Route::put('/update/{id}','HomesController@updateForm');
Route::get('/hapus/{id}','HomesController@hapus');
Route::resource('/tampil','ArticlesController');
Route::get('/artikel','ArticlesController@index');

// tugas menambahkan table buku dengan crud nya
Route::get('/hapusBuku/{id}','BukusController@destroy')->name('hapusBuku');
Route::resource('/about', 'BukusController');
