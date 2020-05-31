<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    // メニュー追加ページ（店舗側）
    public function new()
    {
        return view('takeout.registMenu');
    }
    // メニュー・商品登録 POST
    public function add(Request $request)
    {
        $this->validate($request, [
            'pic' => 'required|image',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|max:10000',
        ]);

        $products = new Product();
        $file_name = $request->file('pic');
        $request->file('pic')->storeAs('public', $file_name);
        $products->pic = 'storage/' . $file_name;

        Auth::user()->products()->save($products->fill($request->all()));
        return redirect('/takeout/mypage');
    }
    // メニュー・商品削除 POST
    public function delete($id)
    {
        Auth::user()->products()->find($id)->delete();
        return redirect('/takeout/mypage');
    }
}
