<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['content' => '商品のお届けについて'],
            ['content' => '商品の交換について'],
            ['content' => '商品トラブルについて'],
            ['content' => 'ショップへのお問い合わせについて'],
            ['content' => 'その他'],
        ]);
    }
}
