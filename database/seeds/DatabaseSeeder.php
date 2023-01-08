<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(BroadCast_TimesTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(Voice_Acotor_Tableseeder::class);
    }
}
