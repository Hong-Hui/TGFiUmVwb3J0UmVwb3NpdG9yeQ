<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsTableSeeder extends Seeder
{

    public function run()
    {
        $permissions = [
            'course-show',
            'course-create',
            'course-edit',
            'course-delete',

            'lab-show',
            'lab-create',
            'lab-edit',
            'lab-delete',

            'assignment-show',
            'assignment-create',
            'assignment-edit',
            'assignment-delete',

            'assistant-create',
            'assistant-delete',
        ];

        $roles = [
            'teacher',
            'student',
            'assistant',
        ];

        foreach ($permissions as $permission)
        {
            // if (!Permission::where('name', $permission)) {
                Permission::create(['name' => $permission]);
            // }
        }

        foreach ($roles as $role)
        {
            // if (!Role::where('name', $role)) {
                Role::create(['name' => $role]);
            // }
        }
    }

}
