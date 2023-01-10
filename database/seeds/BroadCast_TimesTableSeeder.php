<?php

use Illuminate\Database\Seeder;
use App\Models\Broadcast_Time;

class Broadcast_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Broadcast_Time::class,15)->create();
    }
}
