@extends('layouts.app')

@section('title','店舗一覧')

@section('content')
<main class="l-main l-main__bg">
    <!-- search -->
    <section class="p-search u-wrap">
      <p class="p-search__text">テイクアウトできるお店を探そう！！</p>
      <form action="">
        @csrf
        <div class="p-search__content">
          <select class="p-search__select" name="" id="">
            <option value="">ジャンル</option>
          </select>
          <select class="p-search__select" name="" id="">
            <option value="">都道府県</option>
          </select>
          <button class="c-button p-search__btn">検索</button>
        </div>
      </form>
    </section>
    <!-- shopList -->
    <section class="p-shopList u-wrap">
      <!-- shop -->
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
      <div class="p-shop">
        <div class="p-shop__img">
          <a href=""><img src="" alt="" /></a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name"><a href="">モスバーガー</a></h3>
          <span class="p-shop__category">ジャンル/ハンバーグ</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">00:00~00:00</span>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
