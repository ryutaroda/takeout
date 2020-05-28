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

Route::get('/takeout', function () {
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
Route::get('/takeout/detail/{id}', 'RegisterController@detail')->name('takeout.detail');
// 店舗情報・編集・更新
Route::post('/takeout/regist', 'RegisterController@regist')->name('takeout.regist');
// メニュー登録
Route::post('/takeout/addMenu', 'RegisterController@add')->name('takeout.add');
// メニュー削除
Route::post('/takeout/delete/{id}', 'RegisterController@delete')->name('takeout.delete');
