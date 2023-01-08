<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\USA_BroadCaster;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'usa_broadcasters' => $faker->sentence(3)
    ];
});
