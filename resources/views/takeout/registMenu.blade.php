@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <div class="p-form__container">
        <div class="p-form__title">
            <h1 class="p-form__title--text">メニュー登録</h1>
        </div>
        <form method="POST" action="{{ route('takeout.add') }}" class="p-form__body" enctype='multipart/form-data'>
            @csrf

            @error('pic')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="p-form__label p-form__label--upload">
                <input
                    type="file"
                    name="pic"
                    class="p-form__photoUp"
                />
                <p class="p-form__photoUp--text">写真を追加</p>
            </label>

            <label class="p-form__label">
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="p-form__input"  placeholder="商品名" required
                autocomplete="name"
                autofocus />
            {{-- <input type="text" class="p-form__input" placeholder="商品名" /> --}}
            </label>
            <label class="p-form__label">
                <input id="price" type="number" name="price" value="{{ old('price') }}" class="p-form__input" placeholder="値段（円）"  required
                autocomplete="price"
                autofocus />
            {{-- <input type="number" class="p-form__input" placeholder="値段（円）" /> --}}
            </label>

            <button class="c-button p-form__submit p-form__submit--login">
            登録
            </button>
        </form>
    </div>
</main>
@endsection