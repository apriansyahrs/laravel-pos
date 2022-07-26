<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(100)->create();

        User::create([
            'nama' => 'Administrator',
            'username' => 'admin',
            'role' => 'Admin',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'nama' => 'Farhan Adriano',
            'username' => 'farhan',
            'role' => 'Admin',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'nama' => 'General Manager',
            'username' => 'manager',
            'role' => 'Manager',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'nama' => 'Kasir',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => bcrypt('password'),
        ]);
    }
}
