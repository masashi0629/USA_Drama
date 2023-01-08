<?php
use App\Models\Acotor_Work;
use Illuminate\Database\Seeder;

class Acotor_Work_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Acotor_Work::class,15)->create();
    }
}
