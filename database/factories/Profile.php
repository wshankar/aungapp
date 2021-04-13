<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Profile;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'dmNumber' => $faker->unique()->numberBetween(1,50),
        'dob' => $faker->date(),
        'address' => $faker->address(),
        'diabetesAge' => $faker->numberBetween(1, 20),
        'favFood' => $faker->sentence(),
        'profile_pic' => 'http://lorempixel.com/400/200',
        'user_id' => User::all()->random()
    ];
});
