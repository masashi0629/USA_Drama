<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Work;
use App\Work as AppWork;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    return [
        'work_name' => $faker->title,
        'genre_id' => rand(1,15),
        'usa_broadcaster_id' => rand(1,15),
        'broadcast_time_id' => rand(1,15),
        'file_name' => $faker->unique()->imageUrl,
        'summary' => $faker->realText(50)
    ];
});
