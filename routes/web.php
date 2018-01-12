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

Route::resource('hotel', 'HotelController');
Route::resource('kamar', 'KamarController');
Route::resource('reservasi', 'ReservasiController');
Route::resource('user', 'UserController');