<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <header class="header__wrap">
        <div class="header__title">
            <div class="header__logo">FashionablyLate</div>

            <!-- ボタン -->
            <div class="header__buttons">
                @yield('header-buttons')

                @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST" class="header__logout-form">
                    @csrf
                    <button type="submit" class="button--auth">Logout</button>
                </form>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>