<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tel' => $faker->phoneNumber,
        'master' => $faker->name,
        'service' => $faker->randomElement(['Услуга 1','Услуга 2','Услуга 3']),
        'date' => $faker->date(),
        'time' => $faker->time(),
        'price' => rand(1000, 4000) / 10,
    ];
});
