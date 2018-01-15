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

Route::get('/', 'HomeController@index');
Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@doLogin');
Route::get('register', 'AuthController@register');
Route::post('register', 'AuthController@doRegister');
Route::get('logout', 'AuthController@logout');

Route::resource('hotel', 'HotelController');
Route::resource('kamar', 'KamarController');
Route::resource('reservasi', 'ReservasiController');
Route::resource('user', 'UserController');