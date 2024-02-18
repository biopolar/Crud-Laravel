<?php

use App\User;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rizky',
            'last_name' => 'Pandu',
            'email' => 'rizkypandu206@gmail.com',
            'email_verified_at' => now(),
            'roles' => 'Admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        User::create([
            'name' => 'Fernan',
            'last_name' => 'deyna',
            'email' => 'fernandeyna@gmail.com',
            'email_verified_at' => now(),
            'roles' => 'Member',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}
