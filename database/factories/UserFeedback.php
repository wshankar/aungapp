<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\User;
use App\Model\UserFeedback;
use Faker\Generator as Faker;

$factory->define(UserFeedback::class, function (Faker $faker) {
    return [
        'feedbackText' => $faker->paragraph(),
        'feedbackImage' => 'https://source.unsplash.com/random',
        'user_id' => User::all()->random()
    ];
});
