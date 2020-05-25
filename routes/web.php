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
    return view('takeout.index');
});

Auth::routes();
// 店舗一覧ページ（どちらも）
Route::get('/takeout', 'RegisterController@index')->name('takeout');
// マイページ（店舗側）
Route::get('/takeout/mypage', 'RegisterController@mypage')->name('takeout.mypage');
// 店舗情報編集ページ（店舗側）
Route::get('/takeout/edit', 'RegisterController@edit')->name('takeout.edit');
// メニュー追加ページ（店舗側）
Route::get('/takeout/new', 'RegisterController@new')->name('takeout.new');
// 店舗詳細ページ（閲覧者用）
Route::get('/takeout/detail', 'RegisterController@detail')->name('takeout.detail');
