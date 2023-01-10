<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Broadcast_Time;
use Faker\Generator as Faker;

$factory->define(Broadcast_Time::class, function (Faker $faker) {
    return [
        'age_group' => $faker->year,
    ];
});
