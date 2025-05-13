@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__wrap">
    <h2 class="confirm__title">Confirm</h2>
    <table class="confirm__table">
        <tr>
            <th class="confirm__th">お名前</th>
            <td class="confirm__td">{{ $first_name }} {{ $last_name }}</td>
        </tr>
        <tr>
            <th class="confirm__th">性別</th>
            <td class="confirm__td">{{ $gender }}</td>
        </tr>
        <tr>
            <th class="confirm__th">メールアドレス</th>
            <td class="confirm__td">{{ $email }}</td>
        </tr>
        <tr>
            <th class="confirm__th">電話番号</th>
            <td class="confirm__td">{{ $tel }}</td>
        </tr>
        <tr>
            <th class="confirm__th">住所</th>
            <td class="confirm__td">{{ $address }}</td>
        </tr>
        <tr>
            <th class="confirm__th">建物名</th>
            <td class="confirm__td">{{ $building }}</td>
        </tr>
        <tr>
            <th class="confirm__th">お問い合わせの種類</th>
            <td class="confirm__td">{{ $categories->firstWhere('id', $category_id)->content}}</td>
        </tr>
        <tr>
            <th class="confirm__th">お問い合わせ内容</th>
            <td class="confirm__td">{{ $detail }}</td>
        </tr>
    </table>

    <form class="confirm__form" method="POST" action="{{ route('contact.send') }}">
        @csrf
        <input type="hidden" name="first_name" value="{{ $first_name }}">
        <input type="hidden" name="last_name" value="{{ $last_name }}">
        <input type="hidden" name="gender" value="{{ $gender }}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="tel" value="{{ $tel }}">
        <input type="hidden" name="address" value="{{ $address }}">
        <input type="hidden" name="building" value="{{ $building }}">
        <input type="hidden" name="category_id" value="{{ $category_id }}">
        <input type="hidden" name="detail" value="{{ $detail }}">
        <button type="submit" class="confirm__button confirm__button--submit">送信</button>
        <a href="{{ route('contact.show') }}" class="confirm__button confirm__button--edit">修正</a>
    </form>
</div>
@endsection