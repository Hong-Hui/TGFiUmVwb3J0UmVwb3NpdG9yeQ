<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Course::class, 100)->create();
    }

}
