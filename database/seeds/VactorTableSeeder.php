<?php

use App\Models\Vactor;
use Illuminate\Database\Seeder;

class VactorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vactor::class,15)->create();
    }
}
