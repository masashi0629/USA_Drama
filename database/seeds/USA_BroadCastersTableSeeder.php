<?php

use App\Models\USA_BroadCaster;
use Illuminate\Database\Seeder;

class USA_BroadCastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(USA_BroadCaster::class,15)->create();
    }
}
