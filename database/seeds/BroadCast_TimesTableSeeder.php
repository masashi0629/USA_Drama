<?php

use Illuminate\Database\Seeder;
use App\Models\BroadcastTime;

class Broadcast_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BroadcastTime::class,15)->create();
    }
}
