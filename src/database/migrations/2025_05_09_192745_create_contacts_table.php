<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // カテゴリIDを外部キーとして設定
            $table->string('first_name'); // 名字
            $table->string('last_name'); // 名前
            $table->unsignedTinyInteger('gender'); // 性別
            $table->string('email'); // メールアドレス
            $table->string('tel'); // 電話番号
            $table->string('address'); // 住所
            $table->string('building')->nullable(); // 建物名
            $table->text('detail'); // お問い合わせ内容
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
