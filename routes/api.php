<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('dailyrecord', 'DailyRecordController');
Route::apiResource('investigation', 'InvestigationController');
Route::apiResource('medication', 'MedicationController');
Route::apiResource('profile', 'ProfileController');
Route::apiResource('subscription', 'SubscriptionController');