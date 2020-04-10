<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Услуга 1','Услуга 2','Услуга 3']),
        'price' => rand(1000, 4000) / 10,
    ];
});
