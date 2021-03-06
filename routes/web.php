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

Route::get('/', 'PageController@home')->name('home.index');
Route::get('tours', 'PageController@tours')->name('home.tours');
Route::get('about-us', 'PageController@aboutUs')->name('home.aboutUs');
Route::get('contact-us', 'PageController@contactUs')->name('home.contactUs');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
