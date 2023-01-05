<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Work;
use App\Work as AppWork;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    return [
        'actors' => $faker->name,
        'broadcast_times' => $faker->year,
        'usa_broadcasters' => $faker->sentence(3),
        'genres' => $faker->jobTitle,
        'voice_actors' => $faker->name,
        'work_actor' => $faker->name,
        'work_voice_actor' => $faker->name,
        'works' => $faker->title
    ];
});
