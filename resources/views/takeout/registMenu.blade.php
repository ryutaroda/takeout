@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <div class="p-form__container">
      <div class="p-form__title">
        <h1 class="p-form__title--text">メニュー登録</h1>
      </div>
      <form action="" class="p-form__body">
        <!-- <label class="p-form__label">
          <select name="" id="" class="p-form__select">
            <option value=""></option>
          </select>
        </label> -->
        <label class="p-form__label p-form__label--upload">
          <input
            type="file"
            class="p-form__photoUp"
            placeholder="store name"
          />
          <p class="p-form__photoUp--text">写真を追加</p>
        </label>

        <label class="p-form__label">
          <input type="text" class="p-form__input" placeholder="name" />
        </label>
        <label class="p-form__label">
          <input type="number" class="p-form__input" placeholder="price" />
        </label>

        <button class="c-button p-form__submit p-form__submit--login">
          登録
        </button>
      </form>
    </div>
  </main>
@endsection