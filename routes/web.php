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
    return view('welcome');
});
Route::get('/home', 'HomeController@index');

Route::get('/data', 'DataController@index')->name('data');
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:isaAdmin')->group(function() {
    Route::get('/books','BookController@index')->name('books');
    Route::get('/','IndexController@index')->name('index');
    Route::post('/bookDestroy/{id}','BookController@destroy')->name('book.destroy');
    Route::get('/BookDetails/{id}','BookController@show')->name('book.show');
    Route::post('/bookStore','BookController@store')->name('book.store');
    Route::post('/bookUpdate/{id}','BookController@update')->name('book.update');
    Route::get('bookEdit/{id}','BookController@edit')->name('book.edit');
    Route::get('bookShow/{id}','BookController@show');
    Route::get('bookCreate','BookController@create')->name('book.create');
    Route::get('/lists','ListController@index')->name('lists');
    Route::post('/listDestroy/{list_id}','ListController@destroy')->name('list.destroy');
    Route::get('listCreate','ListController@create')->name('list.create');
    Route::post('/listStore','ListController@store')->name('list.store');
    Route::get('listEdit/{list_id}','ListController@edit')->name('list.edit');
    Route::post('/listUpdate/{list_id}','ListController@update')->name('list.update');
    Route::get('listShow/{id}','ListController@show');
});
Route::get('user/books','BookController@index')->name('user.books');
Route::post('/bookDestroy/{id}','BookController@destroy')->name('user.book.destroy');
Route::get('user/bookShow/{id}','BookController@show')->name('user.book.show');
Route::post('/bookStore','BookController@store')->name('user.book.store');
Route::post('/bookUpdate/{id}','BookController@update')->name('user.book.update');
Route::get('bookEdit/{id}','BookController@edit')->name('user.book.edit');
Route::get('bookShow/{id}','BookController@show');
Route::get('user/bookCreate','BookController@create')->name('user.book.create');
Route::get('user/lists','ListController@index')->name('user.lists');
Route::post('/listDestroy/{list_id}','ListController@destroy')->name('user.list.destroy');
Route::get('user/listCreate','ListController@create')->name('user.list.create');
Route::post('/listStore','ListController@store')->name('user.list.store');
Route::get('user/listEdit/{list_id}','ListController@edit')->name('user.list.edit');
Route::post('/listUpdate/{list_id}','ListController@update')->name('user.list.update');
Route::get('user/listShow/{id}','ListController@show');

Auth::routes();


