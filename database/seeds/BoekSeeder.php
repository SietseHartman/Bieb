<?php

use Illuminate\Database\Seeder;
use App\Boek;

class BoekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Boek::class, 10)->create();
    }
}
