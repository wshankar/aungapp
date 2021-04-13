<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Admin\InvComment;
use App\Model\Investigation;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(InvComment::class, function (Faker $faker) {
    return [
        'invComment' => $faker->paragraph(),
        'user_id' => User::all()->random(),
        'investigation_id' => Investigation::all()->random()
    ];
});
