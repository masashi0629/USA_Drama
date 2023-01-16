<?php

use Illuminate\Database\Seeder;
use App\Models\Usa_Broadcaster;

class USA_BroadCastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usa_BroadCaster::class,15)->create();
    }
}
