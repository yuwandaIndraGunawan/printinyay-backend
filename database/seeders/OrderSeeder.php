<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_ids = DB::table('products')->pluck('id')->toArray();
        $user_ids = DB::table('users')->pluck('id')->toArray();

        for($i=0; $i<100; $i++) {
            DB::table('orders')->insert([
                'uuid' => Str::uuid(),
                'product_id' => array_rand($product_ids, 1)+1,
                'user_id' => array_rand($user_ids, 1)+1
            ]);
        }
    }
}
