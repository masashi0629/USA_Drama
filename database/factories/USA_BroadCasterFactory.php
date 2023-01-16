<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usa_Broadcaster;
use Faker\Generator as Faker;

$factory->define(Usa_Broadcaster::class, function (Faker $faker) {
    return [
        'broadcaster_name' => $faker->sentence(3)
    ];
});
