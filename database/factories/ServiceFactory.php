<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Стрижка','Стрижка+борода','Королевское бритье']),
        'price' => rand(1000, 4000) / 10,
    ];
});
