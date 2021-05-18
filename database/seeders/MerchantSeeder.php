<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++) {
            DB::table('merchants')->insert([
                'name' => Str::random(10),
                'phone_number' => '628'.rand(100000000, 999999999),
                'address' => Str::random(40),
            ]);
        }
    }
}
