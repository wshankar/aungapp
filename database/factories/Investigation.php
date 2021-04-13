<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Investigation;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Investigation::class, function (Faker $faker) {
    return [
        'testDate' => $faker->date(),
        'Cpeptide' => $faker->randomNumber(),
        'hba1c' => $faker->numberBetween(5.6, 10.0),
        'cholesterol' => $faker->numberBetween(120, 300),
        'hdl' => $faker->numberBetween(40, 60),
        'ldl' => $faker->numberBetween(70, 150),
        'tg' => $faker->numberBetween(70, 400),
        'ratio' => $faker->numberBetween(3, 5),
        'cr' => $faker->numberBetween(0.8, 2.0),
        'tsh' => $faker->numberBetween(1.5, 5.5),
        'uric_acid' => $faker->numberBetween(200, 500),
        'inv_notes' => $faker->sentence(),
        'nextTest' => $faker->date(),
        'user_id' => User::all()->random()
    ];
});
