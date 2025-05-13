@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-buttons')
@guest
    <a href="{{ route('login') }}" class="button--auth">Login</a>
@endguest
@endsection

@section('content')
<div class="register__wrap">
    <h2 class="register__title">Register</h2>
    <form class="register__form" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- ユーザーネーム -->
        <div class="register__field">
            <label class="register__label">お名前</label>
            <input class="register__input" type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <p class="register__error">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="register__field">
            <label class="register__label">メールアドレス</label>
            <input class="register__input" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p class="register__error">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="register__field">
            <label class="register__label">パスワード</label>
            <input class="register__input" type="password" name="password" required>
            @error('password')
                <p class="register__error">{{ $message }}</p>
            @enderror
        </div>

        <!-- 登録 -->
        <button class="register__button" type="submit">登録</button>
    </form>
</div>
@endsection