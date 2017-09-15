<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProducutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Que hàn J421',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description Que hàn J421',
            'idCategory' => 1,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn J421-VĐ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description Que hàn J421-VĐ',
            'idCategory' => 1,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn E7018-VĐ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description Que hàn E7018-VĐ',
            'idCategory' => 2,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn N46-VĐ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description Que hàn N46-VĐ',
            'idCategory' => 2,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn Inox VĐ-308',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn Inox VĐ-308',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn Inox Kiswel',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn Inox Kiswel',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn cắt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn cắt',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn gang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn cắt',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn đắp',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn đắp',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Que hàn Inox Gemini',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Que hàn Inox Gemini',
            'idCategory' => 3,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Dây hàn EM12',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Dây hàn EM12',
            'idCategory' => 4,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Thuốc hàn Camel',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Thuốc hàn Camel',
            'idCategory' => 4,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Dây hàn GM-70S',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'description ' . 'Dây hàn GM-70S',
            'idCategory' => 4,
            'origin' => 'Việt Nam',
            'trademark' => 'Atlantic',
            'status' => 'Còn hàng',
            'rating' => 8,
        ]);
    }
}
