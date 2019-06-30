<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
     {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(LabsTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
    }

}
