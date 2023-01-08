<?php
use App\Models\Voice_Acotor_Work;
use Illuminate\Database\Seeder;

class Voice_Acotor_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Voice_Acotor_work::class,15)->create();
    }
}
