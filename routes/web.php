<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home','User\HomeController@index')->name('home');
Route::get('/tour/create','Admin\BookTourController@create')->name('tour.create');
Route::post('/tour','Admin\BookTourController@store')->name('tour.store');
