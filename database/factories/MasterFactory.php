<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName,
        'b_day' => $faker->date(),
        'position_id' => $faker->,
    ];
});
