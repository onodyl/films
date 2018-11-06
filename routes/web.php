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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{category?}', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@edit')->name('profile');
Route::post('/profileupdate', 'UserController@update')->name('profileupdate');

Route::get('/film/{id}', 'UserController@film')->name('film');

Route::get('/myfilms', 'UserController@myfilms')->name('myfilms');

Route::get('/likefilm/{id}/{like}', 'UserController@likeFilm')->name('likefilm');
