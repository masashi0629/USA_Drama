<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UsaBroadcaster;
use Faker\Generator as Faker;

$factory->define(UsaBroadcaster::class, function (Faker $faker) {
    return [
        'broadcaster_name' => $faker->sentence(3)
    ];
});
