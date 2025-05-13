@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact__wrap">
    <h2 class="contact__title">Contact</h2>
    <form class="contact__form" method="POST" action="{{ route('contact.confirm') }}">
        @csrf

        <div class="contact__field">
            <label class="contact__label">お名前<span class="contact__required">*</span></label>
            <input class="name__input" type="text" name="first_name" value="{{ old('first_name') }}" placeholder=" 例: 山田">
            @error('first_name')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input class="name__input" type="text" name="last_name" value="{{ old('last_name') }}" placeholder=" 例: 太郎">
            @error('last_name')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="contact__field">
            <label class="contact__label">性別<span class="contact__required">*</span></label>
            <input class="radio__input" type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }}"><label class="input__label">男性</label>
            <input class="radio__input" type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}"><label class="input__label">女性</label>
            <input class="radio__input" type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}"><label class="input__label">その他</label>
            @error('gender')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="contact__field">
            <label class="contact__label">メールアドレス<span class="contact__required">*</span></label>
            <input class="contact__input" type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
            @error('first_name')
            <p class="gender">{{ $message }}</p>
            @enderror
        </div>

        <div class="contact__field">
            <label class="contact__label">電話番号 <span class="contact__required">*</span></label>
            <input class="tel__input" type="text" name="tel" value="{{ old('tel') }}" placeholder="080">
            @error('tel')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <label class="tel__label">-</label>
            <input class="tel__input" type="text" name="tel" value="{{ old('tel') }}" placeholder="1234">
            @error('tel')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <label class="tel__label">-</label>
            <input class="tel__input" type="text" name="tel" value="{{ old('tel') }}" placeholder="5678">
            @error('tel')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="contact__field">
            <label class="contact__label">住所 <span class="contact__required">*</span></label>
            <input class="contact__input" type="text" name="address" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            @error('address')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="contact__field">
            <label class="contact__label">建物名</label>
            <input class="contact__input" type="text" name="building" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101">
        </div>

        <div class="contact__field">
            <label class="contact__label">お問い合わせの種類 <span class="contact__required">*</span></label>
            <select class="contact__select" name="category_id">
                <option class="contact__option" value="">選択してください</option>
                @foreach ($categories as $category)
                <option class="contact__option" value="{{ $category->id }}">{{ $category->content }}</option>
                @endforeach
                <option class="contact__option" value="配達" {{ old('category_id') == '配達' ? 'selected' : '' }}>商品のお届けについて</option>
                <option class="contact__option" value="交換" {{ old('category_id') == '交換' ? 'selected' : '' }}>商品の交換について</option>
                <option class="contact__option" value="トラブル" {{ old('category_id') == 'トラブル' ? 'selected' : '' }}>商品トラブル</option>
                <option class="contact__option" value="お問い合わせ" {{ old('category_id') == 'お問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option class="contact__option" value="その他" {{ old('category_id') == 'その他' ? 'selected' : '' }}>その他</option>
                @error('category_id')
                <p class="error-message">{{ $message }}</p>
                @enderror
            </select>
        </div>

        <div class="contact__field">
            <label class="contact__label">お問い合わせ内容 <span class="contact__required">*</span></label>
            <textarea class="contact__textarea" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
            @error('detail')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button class="confirm__button" type="submit">確認画面</button>
    </form>
</div>
@endsection