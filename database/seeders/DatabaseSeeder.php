<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'Admin@portfolio.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
        ]);
    }
}
