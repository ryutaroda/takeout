@extends('layouts.app')

@section('title','')

@section('content')

    <!-- mian -->
    <main class="l-main l-main__bg">
      <!-- search -->
      <section class="p-infoContent">
        <div class="p-info">
            <div class="p-info__time">営業時間<span>(00:00~00:00)</span></div>
            <h2 class="p-info__shop-name"><span>モスバーガー</span></h2>
            <div class="p-info__category">ハンバーガー</div>
            <div class="p-info__addr">住所</div>
            <div class="p-info__tell">
                <p class="p-info__tell-text">予約の電話番号</p>
                <span class="p-info__tell-num">000-0000-0000</span>
            </div>
            <div class="p-info__edit c-button"><a href="{{ route('takeout.edit') }}">情報編集</a></div>
        </div>
        <div class="p-shopInfo__img">
          <a href=""><img src="" alt="" /></a>
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
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
        <div class="p-product">
          <div class="p-product__img">
            <a href=""><img src="" alt="" /></a>
          </div>
          <div class="p-product__info">
            <h3 class="p-product__name"><a href="">ライスバーガー</a></h3>
            <div class="p-product__price">
              <span class="">600円</span>
            </div>
          </div>
          <div class="c-button p-product__delete">削除</div>
        </div>
      </section>
    </main>
    


@endsection