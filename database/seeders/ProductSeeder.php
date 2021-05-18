<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchant_ids = DB::table('merchants')->pluck('id')->toArray();

        for($i=0; $i<50; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(500, 1000),
                'stock' => rand(0, 2000),
                'merchant_id' => array_rand($merchant_ids, 1)+1
            ]);
        }
    }
}
