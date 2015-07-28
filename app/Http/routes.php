<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
*/

Route::get('/','FrontController@index');
<<<<<<< HEAD
Route::get('/home','HomeController@index');
=======
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');


Route::resource('usuario','UsuarioController');
Route::resource('pelicula','MovieController');
<<<<<<< HEAD
Route::resource('genero','GenreController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
=======
Route::resource('genero','GenreController');
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
