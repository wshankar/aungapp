<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Admin\RecordComment;
use App\Model\DailyRecord;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(RecordComment::class, function (Faker $faker) {
    return [
        'recordComment' => $faker->paragraph(),
        'user_id' => User::all()->random(),
        'record_id' => DailyRecord::all()->random()
    ];
});
