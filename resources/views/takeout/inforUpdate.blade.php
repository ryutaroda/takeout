@extends('layouts.app')

@section('title','')

@section('content')
<!-- mian -->
<main class="l-main l-main__bg">
    <div class="p-form__container">
        <div class="p-form__title">
            <h1 class="p-form__title--text">店舗情報登録</h1>
        </div>
        <form method="POST" action="{{ route('takeout.regist') }}"  enctype='multipart/form-data' class="p-form__body">
            @csrf
            @error('pic')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('open_hours')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('addr_detail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('tell')
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
            <p class="p-form__photoUp--text">お店の写真を追加</p>
        </label>
        {{-- <label class="p-form__label">
            <input type="text" class="p-form__input" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="店名" />
        </label> --}}
        <label class="p-form__label">
            <input
                type="text"
                class="p-form__input"
                name="open_hours" value="{{ old('open_hours') }}" required autocomplete="open_hours"
                placeholder="営業時間 （例： 10:00~17:00）"
            />
        </label>
        <label class="p-form__label">
            <select name="address" class="p-form__input">
                @foreach(config('pref') as $key => $score)
                    <option value="{{ $score }}">{{ $score }}</option>
                @endforeach
            </select>
        </label>
        <label class="p-form__label"> 
            <input
                type="text"
                class="p-form__input"
                name="addr_detail" value="{{ old('addr_detail') }}" required autocomplete="addr_detail"
                placeholder="住所（詳細）"
            />
        </label>
        {{-- <label class="p-form__label">
            <select class="p-form__input">
            @foreach(config('foodcategory') as $key => $score)
                <option value="{{ $score }}">{{ $score }}</option>
            @endforeach
            </select>
        </label> --}}
        <label class="p-form__label">
            <input
                type="number"
                class="p-form__input"
                name="tell" value="{{ old('tell') }}" required autocomplete="tell"
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