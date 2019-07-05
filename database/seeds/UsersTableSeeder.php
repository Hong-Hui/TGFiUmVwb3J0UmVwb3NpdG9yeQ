<?php

use \App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $teacher1 = User::firstOrCreate([
            'name' => 'Dr. Nancy Leveson',
            'email' => 'nancy.leveson@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $teacher2 = User::firstOrCreate([
            'name' => 'Dr. Steve Wozniak',
            'email' => 'steve.not.jobs@apple.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $teacher3 = User::firstOrCreate([
            'name' => 'Dr. Richard Stallman',
            'email' => 'RMS@freeman.man',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::firstOrCreate([
            'name' => 'Aron Dennelly',
            'email' => 'arondennelly@mail.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        factory(User::class, 50)->create();

        foreach (User::all() as $user) {
            $user->syncRoles(['student']);
        }

        $teacher1->syncRoles(['teacher']);
        $teacher2->syncRoles(['teacher']);
        $teacher3->syncRoles(['teacher']);
    }

}
