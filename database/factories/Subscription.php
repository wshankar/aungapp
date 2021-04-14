<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Subscription;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        'subscription_type' => $faker->word(),
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'user_id' => User::all()->random()
    ];
});
