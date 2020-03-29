<?php

use Illuminate\Database\Seeder;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masters')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'patronymic' => Str::random(10),
            'b_day' => '2020-03-28 00:28:33',
            'position_id' => random_int(1,2)
        ]);
    }
}
