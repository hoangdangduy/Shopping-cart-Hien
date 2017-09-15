<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProducutChildTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_children')->insert([
            'name' => 'Que hàn J421 Ф2.5 ALT',
            'code' => 'Q2T',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 1,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J421 Ф3.2 ALT',
            'code' => 'Q3T',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 1,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J421 Ф4 ALT',
            'code' => 'Q4T',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 1,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J421, Ф2.5 VĐ',
            'code' => 'Q2V',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 2,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J421, Ф3.2 VĐ',
            'code' => 'Q3421',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 2,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J421, Ф4 VĐ',
            'code' => 'Q4421',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 2,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J420, Ф3.2 VĐ',
            'code' => 'Q3420',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 2,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn J420, Ф4 VĐ',
            'code' => 'Q3420',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 2,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn E7018-VĐ, Ф3.25',
            'code' => '7018F3',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 3,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn E7018-VĐ, Ф4',
            'code' => '7018F4',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 3,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn N46-VĐ Ф3.2',
            'code' => 'N46F3V',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 4,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn N46-VĐ Ф4',
            'code' => 'N46F4V',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 4,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que hàn N46-VĐ Ф5',
            'code' => 'N46F5V',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 4,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que cắt Ф4',
            'code' => 'QUECAT4',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 7,
            'unit' => 'kg',
        ]);

        DB::table('product_children')->insert([
            'name' => 'Que cắt Ф5',
            'code' => 'QUECAT5',
            'price' => mt_rand(50, 500),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idProduct' => 7,
            'unit' => 'kg',
        ]);
    }
}
