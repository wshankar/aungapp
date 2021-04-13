<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\DailyRecord;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(DailyRecord::class, function (Faker $faker) {
    return [
        'recDate' => $faker->date(),
        'fbs' => $faker->numberBetween(80, 140),
        'breakfast' => $faker->sentence(),
        'nuts' => $faker->sentence(),
        'lunch' => $faker->sentence(),
        'rbs' => $faker->numberBetween(140, 250),
        'fruits' => $faker->word(),
        'dinner' => $faker->sentence(),
        'bodyWeight' => $faker->numberBetween(120, 200),
        'bloodPressure' => $faker->numberBetween(120, 200),
        'heartRate' => $faker->numberBetween(60, 100),
        'rec_notes' => $faker->sentence(),
        'user_id' => $faker->numberBetween(1,10)

    ];
});
