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
        $this->call(Voice_ActorsTableSeeder::class);
        $this->call(BroadCast_TimesTableSeeder::class);
        $this->call(USA_BroadCastersTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(Acotor_Work_TableSeeder::class);
        $this->call(Voice_Acotor_WorkTableSeeder::class);

    }
}
