<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5), // カテゴリID (1〜5のランダム値)
            'first_name' => $this->faker->firstName, // 名字
            'last_name' => $this->faker->lastName, // 名前
            'gender' => $this->faker->numberBetween(1, 2, 3), // 性別 (1: 男性, 2: 女性, 3: その他)
            'email' => $this->faker->unique()->safeEmail, // メールアドレス
            'tel' => $this->faker->phoneNumber, // 電話番号
            'address' => $this->faker->address, // 住所
            'building' => $this->faker->optional()->secondaryAddress, // 建物名 (オプション)
            'detail' => $this->faker->text(200), // お問い合わせ内容
        ];
    }
}
