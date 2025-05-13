# Re-Fashionably-late

## 作成目的
Laravelのアウトプット学習の一環

## アプリケーションURL
http://localhost/

## 機能一覧
ログイン・ログアウト機能、新規会員登録機能、お問い合わせフォーム入力、お問い合わせ内容のデータ管理・検索・削除、お問い合わせ内容のエクスポート

## テーブル設計書/ER図
![スクリーンショット 2025-05-13 143956](https://github.com/user-attachments/assets/5220db43-b826-4512-99d8-75433cfc235c)


## 環境構築
- Dockerビルド(ターミナル・cmd内)
- 1.git clone git@github.com/vvennahuh/Re-Fashionably-late.git
- 2.docker-compose up -d --build
- 3.docker-compose exec php bash（ターミナル・cmd→PHPコンテナにログイン）

- Laravel環境構築
- 1.composer install(PHPコンテナ内)
- 2.Free-market/src内で.env.exampleファイルから.env作成後、環境変数を以下のように編集
- （DB_DATABASE=laravel_db/DB_USERNAME=laravel_user/DB_PASSWORD=laravel_pass）
- 3.php artisan key:generate(PHPコンテナ内・アプリケーションキー作成)
- 4.php artisan migrate --seed（PHPコンテナ内・データベースの作成）
  
## 使用技術(実行環境)
- PHP 3.8
- Laravel 8.x
- Mysql 8.0.26
