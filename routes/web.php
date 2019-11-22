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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halamanpertama', function () {
    return view('pagesatu');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/tambah', 'DashboardController@tambah');

    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori/add', 'KategoriController@add')->name('kategoriAdd');
    Route::get('/kategori/edit/{id}', 'KategoriController@edit')->name('kategoriEdit');
    Route::post('/kategori/update', 'KategoriController@update')->name('kategoriUpdate');
    Route::get('/kategori/delete/{id}', 'KategoriController@delete')->name('kategoriDelete');
    Route::get('/tambah', 'DashboardController@tambah');


});


