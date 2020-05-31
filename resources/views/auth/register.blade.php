@extends('layouts.app')

@section('content')
<main class="l-main l-main__bg">
    <div class="p-form__container">
        <div class="p-form__title">
            <h1 class="p-form__title--text">会員登録</h1>
        </div>
        <form method="POST" class="p-form__body" action="{{ route('register') }}">
            @csrf
            <label class="p-form__label">
                <input id="name" type="text" class="p-form__input" name="name" value="{{ old('name') }}" placeholder="店名" required autocomplete="name" autofocus>
            </label>
            <label class="p-form__label">
                <input id="email" type="email" class="p-form__input" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email">
            </label>
            <label class="p-form__label">
                <input id="password" type="password" class="p-form__input" name="password" placeholder="パスワード" required autocomplete="new-password">
            </label>
            <label class="p-form__label">
                <input id="password_confirm" type="password" class="p-form__input" name="password_confirmation" placeholder="パスワード（再入力）" required autocomplete="new-password">
            </label>
            <button type="submit" class="c-button p-form__submit p-form__submit--login">
            ログイン
            </button>
        </form>
    </div>
</main>
@endsection
