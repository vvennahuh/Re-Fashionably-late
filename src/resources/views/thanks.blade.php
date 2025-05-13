<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    @yield('css')
</head>

<body>
    <div class="thanks__wrap">
        <div class="thanks__logo">Thank you</div>
        <p class="thanks__text">お問い合わせありがとうございました</p>
        <a href="{{ route('/') }}"><button class="thanks__button" type="submit">HOME</button></a>
    </div>
</body>