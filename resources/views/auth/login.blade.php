@extends('layouts.app')

@section('content')
<main class="l-main l-main__bg">
    <div class="p-form__container">
        <div class="p-form__title">
            <h1 class="p-form__title--text">ログイン</h1>
        </div>
        <form method="POST" class="p-form__body" action="{{ route('login') }}">
            @csrf
            <label class="p-form__label">
                <input id="email" type="email" class="p-form__input" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </label>
            <label class="p-form__label">
                <input id="password" type="password" class="p-form__input" placeholder="pass" name="password" required autocomplete="current-password">
            </label>
            {{-- remember me --}}
            {{-- <label class="p-form__label">
                <input class="p-form__check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            </label> --}}
            <button type="submit" class="c-button p-form__submit p-form__submit--login">
            ログイン
            </button>
            @if (Route::has('password.request'))
                <div class="p-form__forget-pass">
                <p>パスワードを忘れた方は<a href="{{ route('password.request') }}">こちら</a></p>
                </div>
            @endif
        </form>
    </div>
</main>
@endsection
