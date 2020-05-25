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
            <label class="p-form__label">
                <input class="p-form__check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            {{-- remember me --}}
            </label>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
