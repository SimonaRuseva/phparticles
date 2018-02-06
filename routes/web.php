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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/autors', 'AutorsController@index')->name('autors');
//Route::get('/autors/{id}', 'AutorsController@show')->name('autors.show');
//Route::get('/autors/edit/{id}', 'AutorsController@edit')->name('autors.edit');
//Route::post('/autors/edit/{id}', 'AutorsController@update')->name('autors.update');
//Route::post('/autors/edit/', 'AutorsController@store')->name('autors.store');
//Route::get('/autors/create/', 'AutorsController@create')->name('autors.create');
//Route::delete('/autors/delete/{id}', 'AutorsController@delete')->name('autors.delete');
//
//
//
//Route::get('/types', 'TypesController@index')->name('types');
//Route::get('/types/{id}', 'TypesController@show')->name('types.show');
//Route::get('/types/edit/{id}', 'TypesController@edit')->name('types.edit');
//Route::post('/types/edit/{id}', 'TypesController@update')->name('types.update');
//Route::post('/types/edit/', 'TypesController@store')->name('types.store');
//Route::get('/types/create/', 'TypesController@create')->name('types.create');
//Route::delete('/types/delete/{id}', 'TypesController@delete')->name('types.delete');
//
//
//
//Route::get('/articles', 'ArticlesController@index')->name('articles');
//Route::get('/articles/{id}', 'ArticlesController@show')->name('articles.show');
//Route::get('/articles/edit/{id}', 'ArticlesController@edit')->name('articles.edit');
//Route::post('/articles/edit/{id}', 'ArticlesController@update')->name('articles.update');
//Route::post('/articles/edit/', 'ArticlesController@store')->name('articles.store');
//Route::get('/articles/create/', 'ArticlesController@create')->name('articles.create');
//Route::delete('/articles/delete/{id}', 'ArticlesController@delete')->name('articles.delete');

Route::resource('articles', 'ArticlesController');
Route::resource('autors', 'AutorsController');
Route::resource('types','TypesController');
