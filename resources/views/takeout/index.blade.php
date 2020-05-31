@extends('layouts.app')

@section('title','店舗一覧')

@section('content')
{{-- <example-component></example-component> --}}
<shop-list v-bind:users="{{ $users }}"></shop-list>
{{-- <main class="l-main l-main__bg">
    <!-- search -->
    <section class="p-search u-wrap">
      <p class="p-search__text">テイクアウトできるお店を探そう！！</p>
      <form method="GET" action="">
        @csrf
        <div class="p-search__content">
          <select class="p-search__select" name="" id="">
            @foreach(config('foodcategory') as $key => $score)
              <option value="{{ $score }}">{{ $score }}</option>
            @endforeach
          </select>
          <select class="p-search__select" name="" id="">
            @foreach(config('pref') as $key => $score)
              <option value="{{ $score }}">{{ $score }}</option>
            @endforeach
          </select>
          <button class="c-button p-search__btn">検索</button>
        </div>
      </form>
    </section>
    <!-- shopList -->
    <section class="p-shopList u-wrap">
      <!-- shop -->
      @foreach ($users as $user)
      <div class="p-shop">
        <div class="p-shop__img">
          <a href="{{ route('takeout.detail', $user->id ) }}"><img src="/storage/{{ $user->information->pic}}" alt="" /></a>
        </div>
        <div class="p-shop__info">
        <h3 class="p-shop__name"><a href="{{ route('takeout') }}">{{ $user->name }}</a></h3>
          <span class="p-shop__category">{{ $user->information->category }}/ {{ $user->information->address }}</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">{{ $user->information->open_hours }}</span>
          </div>
        </div>
      </div>
      @endforeach
    </section>
</main> --}}
@endsection
