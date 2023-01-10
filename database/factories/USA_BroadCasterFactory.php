<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\USA_BroadCaster;
use Faker\Generator as Faker;

$factory->define(USA_BroadCaster::class, function (Faker $faker) {
    return [
        'broadcaster_name' => $faker->sentence(3)
    ];
});
