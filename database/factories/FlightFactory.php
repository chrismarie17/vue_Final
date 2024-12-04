<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'flight_number' => 'FL' . $faker->unique()->numberBetween(1000, 9999),
        'departure' => $faker->city,
        'destination' => $faker->city,
        'departure_time' => $faker->dateTime(),
        'seats_available' => $faker->numberBetween(50, 300),
    ];
});

