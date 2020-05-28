<?php

namespace App\Http\Controllers;

use App\Information;
use App\Product;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // 店舗一覧（どちらも）
    public function index()
    {
        $users = User::all();
        // $prefs = config('pref');
        return view('takeout.index', compact('users'));
    }
    // マイページ（店舗側）
    public function mypage()
    {
        $user = Auth::user();
        // 登録したメニューのデータを取得
        $products = Auth::user()->products()->get();
        return view('takeout.mypage', compact('products', 'user'));
    }
    // 店舗情報編集（店舗側）
    public function edit()
    {
        return view('takeout.inforEdit');
    }
    // 店舗情報登録（店舗側）
    public function regist(Request $request)
    {
        $this->validate($request, [
            'pic' => 'required|image',
            'address' => 'required|string|max:255',
            'addr_detail' => 'required|string|max:255',
            'tell' => 'required|string|max:255',
            'open_hours' => 'required|string|max:255',
        ]);

        $information = new Information();
        $file_name = $request->file('pic');
        $request->file('pic')->storeAs('public', $file_name);
        $information->pic = 'storage/' . $file_name;
        // $information->user_id = $request->user()->id;
        // $information->address = $request->address;
        // $information->addr_detail = $request->addr_detail;
        // $information->tell = $request->tell;
        // $information->open_hours = $request->open_hours;
        // $information->fill($request->all())->save();
        Auth::user()->information()->save($information->fill($request->all()));
        return redirect('/takeout/mypage');
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
    // メニュー・商品登録
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
    // メニュー・商品削除
    public function delete($id)
    {
        // Product::find($request->id)->delete();
        Auth::user()->products()->find($id)->delete();
        return redirect('/takeout/mypage');
    }
}
