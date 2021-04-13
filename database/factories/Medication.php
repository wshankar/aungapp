<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Medication;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Medication::class, function (Faker $faker) {
    return [
        'med_date' => $faker->date(),
        'noMed' => $faker->sentence(),
        'med1' => $faker->sentence(),
        'med2' => $faker->sentence(),
        'med3' => $faker->sentence(),
        'med4' => $faker->sentence(),
        'med5' => $faker->sentence(),
        'med6' => $faker->sentence(),
        'med7' => $faker->sentence(),
        'med8' => $faker->sentence(),
        'med9' => $faker->sentence(),
        'med10' => $faker->sentence(),
        'med11' => $faker->sentence(),
        'med12' => $faker->sentence(),
        'med13' => $faker->sentence(),
        'med14' => $faker->sentence(),
        'med15' => $faker->sentence(),
        'medFree' => $faker->sentence(),
        'med_notes' => $faker->paragraph(),
        'user_id' => User::all()->random()

    ];
});
