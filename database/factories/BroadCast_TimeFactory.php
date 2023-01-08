<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BroadCast_Time;
use Faker\Generator as Faker;

$factory->define(BroadCast_Time::class, function (Faker $faker) {
    return [
        'age_group' => $faker->year,
    ];
});
