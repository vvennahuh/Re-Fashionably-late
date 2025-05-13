@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header-buttons')
@auth
<a href="{{ route('register') }}" class="button--auth">logout</a>
@endauth
@endsection

<div class="admin__wrap">
    <h2 class="admin__title">Admin</h2>

    <div class="admin__search">
        <input type="text" class="admin__input" placeholder="名前やメールアドレスを入力してください">
        <select class="admin__select">
            <option class="admin__option" value="">性別</option>
            <option class="admin__option" value="男性">男性</option>
            <option class="admin__option" value="女性">女性</option>
            <option class="admin__option" value="その他">その他</option>
        </select>
        
        <select class="admin__select">
            <option class="admin__option" value="">お問い合わせの種類</option>
            @foreach ($categories as $category)
            <option class="admin__option" value="{{ $category->id }}">{{ $category->content }}</option>
            @endforeach
            <option class="admin__option" value="お届け">商品のお届けについて</option>
            <option class="admin__option" value="交換">商品の交換について</option>
            <option class="admin__option" value="トラブル">商品トラブル</option>
            <option class="admin__option" value="お問い合わせ">ショップへのお問い合わせ</option>
            <option class="admin__option" value="その他">その他</option>
        </select>
        <input type="date" class="admin__input">
        <button class="admin__button">検索</button>
        <button class="admin__button">リセット</button>
    </div>

    <div class="pagination">
        {{ $contacts->links('vendor.pagination.default') }}
    </div>
</div>

<table class="admin__table">
    <thead class="admin__thead">
        <tr>
            <th class="admin__th">お名前</th>
            <th class="admin__th">性別</th>
            <th class="admin__th">メールアドレス</th>
            <th class="admin__th">お問い合わせの種類</th>
            <th class="admin__th"></th>
        </tr>
    </thead>
    <tbody class="admin__tbody">
        <tr>
            <td>{{ $first_name }} {{ $last_name }}</td>
            <td>{{ $gender }}</td>
            <td>{{ $email }}</td>
            <td>{{ $categories->firstWhere('id', $category_id)->content}}</td>
            <td><button class="admin__detail">詳細</button></td>
        </tr>
    </tbody>
</table>
@endsection