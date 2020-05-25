<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title','Home') | Take Out</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- header -->
        <header class="l-header">
            <div class="p-header u-wrap">
            <!-- title -->
            <h1 class="p-header__title"><a href="{{ url('/') }}">Take Out</a></h1>
            <!-- headerNav -->
            <nav class="p-header__nav">
                <ul class="p-header__nav-list">
                    @guest
                        <li class="c-button p-header__nav-item p-header__nav-item__regist">
                            <a href="{{ route('register') }}">店舗掲載登録</a>
                        </li>
                        <li class="c-button p-header__nav-item p-header__nav-item__login">
                            <a href="{{ route('login') }}">掲載店舗ログイン</a>
                        </li>
                        @else
                        <li class="c-button p-header__nav-item p-header__nav-item__mypage">
                            <a href="{{ route('takeout.mypage') }}">マイページ</a>
                        </li>
                        {{-- ログアウトのここ直して！！！！！ --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <li class="c-button p-header__nav-item p-header__nav-item__logout">
                                <a href="">ログアウト</a>
                            </li>
                        </form>
                        
                    @endguest
                </ul>
            </nav>
            </div>
        </header>

        <main class="">
            @yield('content')
        </main>
        <!-- footer -->
        <footer class="l-footer">
            <p class="p-footer__copyright">Copyright © haiki. All Rights Reserved</p>
        </footer>
    </div>
</body>
</html>
