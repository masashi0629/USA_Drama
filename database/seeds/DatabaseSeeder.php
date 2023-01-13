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
        $this->call(VactorTableSeeder::class);
        $this->call(Broadcast_TimesTableSeeder::class);
        $this->call(USA_BroadCastersTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(Acotor_Work_TableSeeder::class);
        $this->call(Vactor_WorkTableSeeder::class);

    }
}
