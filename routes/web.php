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
Route::get('/', 'Home\MainController@index');
Route::get('/news-detail-{id}', 'Home\MainController@get_by_id')->name('details');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){

Route::get('/', function () {
    return view('admin.index');
});

// Berita
Route::resource('/news', 'Admin\BeritaController');
// Berita Datatables
Route::get('/beritas/datatables', 'Admin\BeritaController@getDataTbales')->name('beritas.datatables');
// Kategori
Route::resource('/kategori', 'Admin\KategoriController')->except(['show', 'edit']);
// Datatables kategori
Route::get('kategoris/datatables', 'Admin\KategoriController@getDataTbales')->name('datatables.kategori');

Route::resource('news_type', 'Admin\NewsTypeController')->except(['show', 'edit', 'create']);
Route::get('news_types/datatables', 'Admin\NewsTypeController@getDataTbales')->name('datatables.news_types');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
