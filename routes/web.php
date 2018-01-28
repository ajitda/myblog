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

Route::get('/', 'FrontController@index');

Route::get('/single', 'HomeController@single');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profiles', 'ProfileController');
Route::get('/postcategory', [
	'uses' => 'PostCategoryController@index',
	'as' => 'postcategory'
]);


Route::post('/postcategory/store', [
	'uses' => 'PostCategoryController@store',
	'as' => 'postcategory.store'
]);

Route::get('/postcategory/{postcategory}', [
	'uses' => 'PostCategoryController@show',
	'as' => 'postcategory.show'
]);

Route::resource('/posts', 'PostController');