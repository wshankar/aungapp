<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\User;
use App\Model\UserPromise;
use Faker\Generator as Faker;

$factory->define(UserPromise::class, function (Faker $faker) {
    return [
        'promiseText' => $faker->paragraph(),
        'promiseImage' => 'https://source.unsplash.com/random',
        'user_id' => User::all()->random()
    ];
});
