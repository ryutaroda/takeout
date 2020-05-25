@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <div class="p-form__container">
      <div class="p-form__title">
        <h1 class="p-form__title--text">店舗情報登録</h1>
      </div>
      <form action="" class="p-form__body">
       
        <label class="p-form__label p-form__label--upload">
          <input
            type="file"
            class="p-form__photoUp"
            placeholder="store name"
          />
          <p class="p-form__photoUp--text">お店の写真を追加</p>
        </label>

        <label class="p-form__label">
          <input type="text" class="p-form__input" placeholder="店名" />
        </label>
        <label class="p-form__label">
          <input
            type="text"
            class="p-form__input"
            placeholder="営業時間 （例： 10:00~17:00）"
          />
        </label>
        <label class="p-form__label">
          <input
            type="text"
            class="p-form__input"
            placeholder="住所（県名）"
          />
        </label>
        <label class="p-form__label">
          <input
            type="text"
            class="p-form__input"
            placeholder="住所（詳細）"
          />
        </label>
        <label class="p-form__label">
          <input type="text" class="p-form__input" placeholder="ジャンル" />
        </label>
        <label class="p-form__label">
          <input
            type="number"
            class="p-form__input"
            placeholder="電話番号（ハイフンなし）"
          />
        </label>

        <button class="c-button p-form__submit p-form__submit--login">
          登録
        </button>
      </form>
    </div>
  </main>

@endsection