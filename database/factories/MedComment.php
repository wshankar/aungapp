<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Admin\MedComment;
use App\Model\Medication;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(MedComment::class, function (Faker $faker) {
    return [
        'medComment' => $faker->paragraph(),
        'user_id' => User::all()->random(),
        'medication_id' => Medication::all()->random()
    ];
});
