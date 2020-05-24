<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // 店舗一覧（どちらも）
    public function index()
    {
        return view('takeout.index');
    }
    // マイページ（店舗側）
    public function mypage()
    {
        return view('takeout.mypage');
    }
    // 店舗情報編集（店舗側）
    public function edit()
    {
        return view('takeout.inforEdit');
    }
    // メニュー追加（店舗側）
    public function new()
    {
        return view('takeout.registMenu');
    }
    // 店舗詳細（閲覧者用）
    public function detail()
    {
        return view('takeout.shopDetail');
    }
}
