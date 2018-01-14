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
Route::get('/autors', 'AutorsController@index')->name('autors');
Route::get('/autors/{id}', 'AutorsController@show')->name('autors_show');
Route::get('/autors/edit/{id}', 'AutorsController@edit')->name('autors_edit');
Route::post('/autors/edit/{id}', 'AutorsController@update')->name('autors_update');
Route::post('/autors/edit/', 'AutorsController@store')->name('autors_store');
Route::get('/autors/create/', 'AutorsController@create')->name('autors_create');
Route::delete('/autors/delete/{id}', 'AutorsController@delete')->name('autors_delete');



Route::get('/types', 'TypesController@index')->name('types');
Route::get('/types/{id}', 'TypesController@show')->name('types_show');
Route::get('/types/edit/{id}', 'TypesController@edit')->name('types_edit');
Route::post('/types/edit/{id}', 'TypesController@update')->name('types_update');
Route::post('/types/edit/', 'TypesController@store')->name('types_store');
Route::get('/types/create/', 'TypesController@create')->name('types_create');
Route::delete('/types/delete/{id}', 'TypesController@delete')->name('types_delete');



Route::get('/articles', 'ArticlesController@index')->name('articles');
Route::get('/articles/{id}', 'ArticlesController@show')->name('articles_show');
Route::get('/articles/edit/{id}', 'ArticlesController@edit')->name('articles_edit');
Route::post('/articles/edit/{id}', 'ArticlesController@update')->name('articles_update');
Route::post('/articles/edit/', 'ArticlesController@store')->name('articles_store');
Route::get('/articles/create/', 'ArticlesController@create')->name('articles_create');
Route::delete('/articles/delete/{id}', 'ArticlesController@delete')->name('articles_delete');

