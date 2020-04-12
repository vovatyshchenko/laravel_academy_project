<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(MastersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
