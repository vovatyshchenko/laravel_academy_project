<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        //'name' => $faker->firstName,
        'master_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
        'date' => $faker->date(),
    ];
});
