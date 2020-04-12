<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Master;
use Faker\Generator as Faker;

$factory->define(Master::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->name,
        'description' => $faker->randomLetter,
        'b_day' => $faker->date(),
        'position_id' => $faker->randomElement(['1', '2', '3']),
    ];
});
