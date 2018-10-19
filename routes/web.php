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

Route::get('home', 'HomeController@index')->middleware('auth');

Route::get('login', 'LoginController@create')->name('login')->middleware('guest');;
Route::post('login', 'LoginController@store')->middleware('guest');
Route::get('logout', 'LoginController@destroy')->middleware('auth');

Route::get('register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

