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

Route::middleware('auth')->group(function () {
    Route::get('home', 'HomeController@index');
    Route::get('logout', 'LoginController@destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('login', 'LoginController@create')->name('login');
    Route::post('login', 'LoginController@store');

    Route::get('register', 'RegisterController@create');
    Route::post('register', 'RegisterController@store');
});