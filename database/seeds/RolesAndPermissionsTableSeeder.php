<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsTableSeeder extends Seeder
{

    public function run()
    {
        // thinking about putting these in the database, as the number can scale exponentially.

        $accountPermissions = [
            'create assistant accounts',
            'delete assistant accounts',
            'delete accounts',
            'delete own accounts',
        ];

        $coursePermissions = [
            'view courses',
            'view own courses',
            'create courses',
            'edit courses',
            'edit own courses',
            'delete courses',
            'delete own courses',
        ];

        $labPermissions = [
            'view labs',
            'view own labs',
            'create labs',
            'edit labs',
            'edit own labs',
            'delete labs',
            'delete own labs',
        ];

        $assignmentPermissions = [
            'view assignments',
            'view own assignments',
            'create assignments',
            'edit assignments',
            'edit own assignments',
            'delete assignments',
            'delete own assignments',
        ];

        $roles = [
            'teacher',
            'student',
            'assistant',
            'guest',
        ];

        foreach ($coursePermissions as $permission) {
            if (!Permission::where('name', $permission)->first()) {
                Permission::create(['name' => $permission]);
            }
        }
        foreach ($labPermissions as $permission) {
            if (!Permission::where('name', $permission)->first()) {
                Permission::create(['name' => $permission]);
            }
        }
        foreach ($assignmentPermissions as $permission) {
            if (!Permission::where('name', $permission)->first()) {
                Permission::create(['name' => $permission]);
            }
        }
        foreach ($accountPermissions as $permission) {
            if (!Permission::where('name', $permission)->first()) {
                Permission::create(['name' => $permission]);
            }
        }

        foreach ($roles as $role) {
            if (!Role::where('name', $role)->first()) {
                Role::create(['name' => $role]);
            }
        }

        Role::where('name', 'teacher')->first()->syncPermissions([
            'view courses',
            'create courses',
            'edit courses',
            'delete courses',

            'view labs',
            'create labs',
            'edit labs',
            'delete labs',

            'view assignments',
            'edit assignments',
            'delete assignments',

            'create assistant accounts',
            'delete assistant accounts',
        ]);
        Role::where('name', 'student')->first()->syncPermissions([
            'view courses',

            'view labs',

            'view own assignments',
            'create assignments',
            'edit own assignments',
            'delete own assignments',
        ]);
        // Role::where('name', 'assistant')->first()->syncPermissions([

        // ]);
        Role::where('name', 'guest')->first()->syncPermissions([
            'view courses',

            'view labs',
        ]);

    }
}
