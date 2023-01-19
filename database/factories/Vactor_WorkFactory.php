<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vactor_Work;
use Faker\Generator as Faker;

$factory->define(Vactor_Work::class, function (Faker $faker) {
    return [
        'work_id' => rand(1,15),
        'vactor_id' => rand(1,15),
    ];
});
