<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Master;
use Faker\Generator as Faker;

$factory->define(Master::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName,
        'b_day' => $faker->date(),
        'position_id' => $faker->randomElement(['1', '2', '3']),
    ];
});
