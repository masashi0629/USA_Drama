<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Voice_Acotor_Work;
use Faker\Generator as Faker;

$factory->define(Voice_Acotor_Work::class, function (Faker $faker) {
    return [
        'work_id' => rand(1,15),
        'voice_actor_id' => rand(1,15),
    ];
});
