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

Route::get('/',"PostController@index")->name('home');

Route::get('create',"PostController@create");

Route::get('delete/{delete}',"PostController@delete");

Route::get('update',"PostController@update");

Route::post('posts',"PostController@store");

Route::get('posts/{post}',"PostController@show");

Route::get('edit/{post}',"PostController@show_delete");

Route::post('show_delete/{post}',"PostController@update");

Route::get('myposts/{post}',"PostController@myposts");





Route::post('posts/{post}/comments',"commentsController@store");




Route::get('register',"RegistrationController@create");

Route::post('register',"RegistrationController@store");

Route::get('logout',"SessionsController@destroy");

Route::get('login',"SessionsController@create");

Route::post('login',"SessionsController@store");






