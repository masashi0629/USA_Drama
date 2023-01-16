<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BroadcastTime;
use Faker\Generator as Faker;

$factory->define(BroadcastTime::class, function (Faker $faker) {
    return [
        'age_group' => $faker->year,
    ];
});
