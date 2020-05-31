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
Route::get('/takeout', 'ShopController@index')->name('takeout');
// 店舗一覧ページ カテゴリーで絞り込み
Route::get('/takeout/search', 'ShopController@search')->name('takeout.search');
// 店舗詳細ページ（閲覧者用）
Route::get('/takeout/detail/{id}', 'ShopController@detail')->name('takeout.detail');

Route::group(['middleware' => 'auth'], function () {
    // マイページ（店舗側）
    Route::get('/takeout/mypage', 'ShopController@mypage')->name('takeout.mypage');
    // 店舗情報登録ページ（店舗側）
    Route::get('/takeout/newInfo', 'ShopController@newInfo')->name('takeout.newInfo');
    // 店舗情報編集ページ（店舗側）
    Route::get('/takeout/editInfo/{id}', 'ShopController@editInfo')->name('takeout.editInfo');
    // メニュー追加ページ（店舗側）
    Route::get('/takeout/new', 'MenuController@new')->name('takeout.new');

    // 店舗情報・編集
    Route::post('/takeout/regist', 'ShopController@regist')->name('takeout.regist');
    // 店舗情報・更新
    Route::post('/takeout/update/{id}', 'ShopController@update')->name('takeout.update');
    // メニュー登録
    Route::post('/takeout/addMenu', 'MenuController@add')->name('takeout.add');
    // メニュー削除
    Route::post('/takeout/delete/{id}', 'MenuController@delete')->name('takeout.delete');
});
