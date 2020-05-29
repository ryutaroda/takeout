<?php

namespace App\Http\Controllers;

use App\Information;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    // 店舗一覧（どちらも）
    public function index()
    {
        $users = User::all();
        // $prefs = config('pref');
        return view('takeout.index', compact('users'));
    }
    // 店舗一覧絞り込み
    public function search(Request $request)
    {
        $query = DB::table('users')
            ->join('informations', 'users.id', '=', 'informations.user_id');

        $category = $request->input('category');
        $address = $request->input('address');

        if (!empty($category)) {
            $query->where('category', 'like', "%$category%");
        }
        if (!empty($address)) {
            $query->where('address', 'like', "%{$address}%");
        }

        $users = $query->get();

        return view('takeout.index', compact('users'));
    }
    // マイページ（店舗側）
    public function mypage()
    {
        $user = Auth::user();
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
            'category' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'addr_detail' => 'required|string|max:255',
            'tell' => 'required|string|max:255',
            'open_hours' => 'required|string|max:255',
        ]);

        $information = new Information();
        $file_name = $request->file('pic');
        $request->file('pic')->storeAs('public', $file_name);
        $information->pic = 'storage/' . $file_name;
        Auth::user()->information()->save($information->fill($request->all()));
        return redirect('/takeout/mypage');
    }
    // メニュー追加（店舗側）
    public function new()
    {
        return view('takeout.registMenu');
    }
    // 店舗詳細（閲覧者用）
    public function detail(User $user, $id)
    {
        $user = User::find($id);
        $products = $user->products;
        $information = $user->information;
        return view('takeout.shopDetail', compact('user', 'products', 'information'));
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
