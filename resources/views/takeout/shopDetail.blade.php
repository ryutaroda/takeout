@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <!-- infor -->
    <section class="p-infoContent">
        <div class="p-info">
            <div class="p-info__time">営業時間<span>{{ $user->information->open_hours }}</span></div>
        <h2 class="p-info__shop-name"><span>{{ $user->name }}</span></h2>
        <div class="p-info__category">{{ $user->information->category }}</div>
        <div class="p-info__addr">{{ $user->information->address }}{{ $user->information->addr_detail }}</div>
            <div class="p-info__tell">
                <p class="p-info__tell-text">■予約の電話番号</p>
                <span class="p-info__tell-num">{{ $user->information->tell }}</span>
            </div>
        </div>
        <div class="p-shopInfo__img">
            <a href=""><img src="/storage/{{ $user->information->pic}}" alt="" /></a>
        </div>
    </section>
    <!-- productsList -->
    <section class="p-productList">
        <div class="p-productList__title">メニュー</div>
        <!-- product -->
        <div>
        @foreach ($products as $product)
        <div class="p-product">
            <div class="p-product__img">
                <img src="/storage/{{ $product->pic}}">
                {{-- <a href=""><img src="" alt="" /></a> --}}
            </div>
            <div class="p-product__info">
                <h3 class="p-product__name">{{ $product->name }}</h3>
                <div class="p-product__price">
                    <span class="">{{ $product->price }}円</span>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </section>
</main>
@endsection