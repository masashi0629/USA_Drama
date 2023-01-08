<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Voice_Actor;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'voice_actor_name' => $faker->name
    ];
});
