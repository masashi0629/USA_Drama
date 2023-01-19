<?php

use Illuminate\Database\Seeder;
use App\Models\UsaBroadcaster;

class USA_BroadCastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UsaBroadCaster::class,15)->create();
    }
}
