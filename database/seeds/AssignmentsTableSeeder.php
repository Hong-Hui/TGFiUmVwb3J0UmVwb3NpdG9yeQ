<?php

use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Assignment::class, 500)->create();
    }

}
