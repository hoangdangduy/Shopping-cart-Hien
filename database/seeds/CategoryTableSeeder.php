<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Que hàn thường',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Que hàn chịu lực',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Que hàn đặc biệt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Dây hàn, thuốc hàn',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Đá cắt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Đá mài, vật liệu mài',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Sơn dầu, sơn xịt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Keo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Vít, rút, nở',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Khóa, bản lề, clemon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Đinh, dây, lưới thép',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Lưới nhựa, dây buộc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Lưỡi cưa, lưỡi cắt',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Mũi khoan, đục, khoét',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);




    }
}
