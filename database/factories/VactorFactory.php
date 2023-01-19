<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vactor;
use Faker\Generator as Faker;

$factory->define(Vactor::class, function (Faker $faker) {
    return [
        'voice_actor_name' => $faker->name
    ];
});
