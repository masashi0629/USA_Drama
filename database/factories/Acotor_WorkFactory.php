<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Acotor_Work;
use Faker\Generator as Faker;

$factory->define(Acotor_Work::class, function (Faker $faker) {
    return [
        'Acotor_Work' => $faker->name
    ];
});
