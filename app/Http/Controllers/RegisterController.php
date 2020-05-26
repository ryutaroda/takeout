<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // メニュー登録
    public function add(Request $request)
    {
        $this->validate($request, [
            'pic' => 'required|image',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|max:10000',
        ]);

        $product = new Product();
        $file_name = time() . '.' . $request->file('pic')->getClientOriginalName();
        $request->file('pic')->storeAs('public', $file_name);
        $product->pic = 'storage/' . $file_name;
        Auth::user()->products()->save($product->fill($request->all()));
        return redirect('/takeout/mypage');
    }
}
