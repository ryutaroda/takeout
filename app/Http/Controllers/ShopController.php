<?php

namespace App\Http\Controllers;

use App\Information;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    // 店舗一覧ページ（どちらも）
    public function index()
    {
        $users = DB::table('users')
            ->join('informations', 'users.id', '=', 'informations.user_id')->get();
        // $users = User::all();
        // $information =  Information::all();
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

    // 店舗情報登録ページ（店舗側）
    public function newInfo()
    {
        return view('takeout.newInfo');
    }
    // 店舗情報登録 POST（店舗側）
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
    // 店舗情報編集ページ（店舗側）
    public function editInfo($id)
    {
        $information = Auth::user()->information()->find($id);
        return view('takeout.editInfo', compact('information'));
    }
    // 店舗情報登録 POST（店舗側）
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pic' => 'required|image',
            'category' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'addr_detail' => 'required|string|max:255',
            'tell' => 'required|string|max:255',
            'open_hours' => 'required|string|max:255',
        ]);

        $information = Information::find($id);
        $file_name = $request->file('pic');
        $request->file('pic')->storeAs('public', $file_name);
        $information->pic = 'storage/' . $file_name;
        Auth::user()->information()->save($information->fill($request->all()));
        return redirect('/takeout/mypage');
    }
    // 店舗詳細（閲覧者用）
    public function detail(User $user, $id)
    {
        // ユーザーID取得
        $user = User::find($id);
        // ユーザーIDに紐づく情報を取得
        $products = $user->products;
        $information = $user->information;
        return view('takeout.shopDetail', compact('user', 'products', 'information'));
    }

    // マイページ（店舗側）
    public function mypage()
    {
        $user = Auth::user();
        $products = Auth::user()->products()->get();
        return view('takeout.mypage', compact('products', 'user'));
    }
}
