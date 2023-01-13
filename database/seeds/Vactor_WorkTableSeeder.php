<?php
use App\Models\Vactor_Work;
use Illuminate\Database\Seeder;

class Vactor_WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vactor_Work::class,15)->create();
    }
}
