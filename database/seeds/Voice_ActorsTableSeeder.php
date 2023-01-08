<?php

use App\Models\Voice_Actor;
use Illuminate\Database\Seeder;

class Voice_ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Voice_Actor::class,15)->create();
    }
}
