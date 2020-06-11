@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <!-- search -->
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
            <div class="p-info__edit c-button"><a href="{{ route('takeout.editInfo',$user->information->id) }}">情報編集</a></div>
        </div>
        <div class="p-shopInfo__img">
            <a href=""><img src="/storage/{{ $user->information->pic}}" alt="" /></a>
        </div>
    </section>

    <!-- shopList -->
    <section class="p-productList">
    <!-- shop -->
    <div>
        <div class="p-productList__title">
        メニュー<span class="c-button p-productList__title--btn"><a href="{{ route('takeout.new') }}">追加</a></span>
        </div>
    </div>

    {{-- <div class="p-productContainer">
    @foreach ($products as $product)
    <div class="p-product">
        <button class="c-btn p-detail__btn__buy"><a href="{{ route('products.detail',$product->id) }}">詳細</a></button>
        <button class="c-btn p-detail__btn__buy"><a href="{{ route('products.edit',$product->id) }}">編集</a></button>
        <div class="p-product__store">支店</div>
        <a href="{{ route('products.detail',$product->id ) }}">a</a>
        <div class="p-product__photo">
            <img src="{{ asset($product->pic) }}">
        </div>
        <div class="p-product__photo"></div>
        <div class="p-product__name">{{ $product->name }}</div>
        <div class="p-product__border"></div>
        <div class="p-product__price">{{ $product->price }}えん</div>      
    </div>
    @endforeach
    </div> --}}

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
            <form action="{{ route('takeout.delete',$product->id ) }}" method="post" >
                @csrf
                <button class="c-button p-product__delete" onclick='return confirm("削除しますか？");'>削除</button>
            </form>
        </div>
        @endforeach
        {{-- <div class="p-product">
            <div class="p-product__img">
                <img src="/storage/1.jpg" alt="" />
            </div>
            <div class="p-product__info">
                <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
                <div class="p-product__price">
                    <span class="">600円</span>
                </div>
            </div>
            <div class="c-button p-product__delete">削除</div>
        </div> --}}
    </div>
    </section>
</main>
@endsection