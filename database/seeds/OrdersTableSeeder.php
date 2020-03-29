<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'name' => Str::random(10),
            'tel' => '0501234567',
            'master' => Str::random(10),
            'service' => Str::random(10),
            'data' => '2020-03-28 00:28:33',
            'time' => '09-00',
            'price' => random_int(150,500),
            'status' => random_int(0,1)
        ]);
    }
}
