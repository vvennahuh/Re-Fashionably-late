@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-buttons')
@guest
    <a href="{{ route('register') }}" class="button--auth">Register</a>
@endguest
@endsection

@section('content')
<div class="login__wrap">
    <h2 class="login__title">login</h2>
    <form class="login__form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="login__field">
            <label class="login__label">メールアドレス</label>
            <input class="login__input" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p class="login__error">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="login__field">
            <label class="login__label">パスワード</label>
            <input class="login__input" type="password" name="password" required>
            @error('password')
                <p class="login__error">{{ $message }}</p>
            @enderror
        </div>

        <!-- ログイン -->
        <button class="login__button" type="submit">ログイン</button>
    </form>
</div>
@endsection