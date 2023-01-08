<?php

use Illuminate\Database\Seeder;

class BroadCast_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BroadCast_time::class,15)->create();
    }
}
