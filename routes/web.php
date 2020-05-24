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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/takeout', 'RegisterController@index')->name('takeout');
Route::get('/takeout/mypage', 'RegisterController@mypage')->name('takeout.mypage');
Route::get('/takeout/edit', 'RegisterController@edit')->name('takeout.edit');
Route::get('/takeout/new', 'RegisterController@new')->name('takeout.new');
Route::get('/takeout/detail', 'RegisterController@detail')->name('takeout.detail');
