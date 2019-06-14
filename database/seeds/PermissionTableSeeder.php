<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
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
            'assistant-show',
            'assistant-create',
            'assistant-edit',
            'assistant-delete',
        ];

        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }

}
