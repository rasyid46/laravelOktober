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

// Route::get('/', 'HomesController@index');
// Route::get('/post', 'HomesController@post')->name('blog');
// // Route::get('/about', 'HomesController@about')->name('about');
// Route::get('/contact', 'HomesController@contact')->name('contact');
// Route::post('/kirim','HomesController@simpan');
// Route::get('/newForm','HomesController@newForm')->name('newForm');
// Route::post('/simpan','HomesController@store');
// Route::get('/formEdit/{id}','HomesController@editForm');
// Route::put('/update/{id}','HomesController@updateForm');
// Route::get('/hapus/{id}','HomesController@hapus');
// Route::resource('/tampil','ArticlesController');
// Route::get('/artikel','ArticlesController@index');
Route::get('/','ArticlesController@index');
 


// tugas menambahkan table buku dengan crud nya
Route::get('/hapusBuku/{id}','BukusController@destroy')->name('hapusBuku');
Route::resource('/about', 'BukusController');
Route::resource('comments', 'CommentController',['only'=>['store']]);


//https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('index');

Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');
Route::get('login','SessionsController@login')->name('login');
Route::post('login','SessionsController@login_store')->name('login.store');
Route::get('logout','SessionsController@logout')->name('logout');


//this routes for check if email user is exist in database
Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');
Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');
//this routes for handle changes password
Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');

Route::group(['middleware'=>'sentinel' ], function (){
    Route::resource('articles', 'ArticlesController');
});

//fungsi prefix
// admin/list
// admin/user
//
Route::group(['prefix'=>'admin','middleware'=>   ['sentinel','hasAdmin'] ], function (){
    //admin/articles
    Route::get('/articles', 'ArticlesController@index')->name('admin.dashboard');
     //admin/dashboard
    Route::get('/dashboard', 'Admin\DashboardAdminController@index')->name('admin.articles.list');
});