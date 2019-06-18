<?php

use Illuminate\Database\Seeder;

class LabsTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Lab::class, 100)->create();
    }

}
