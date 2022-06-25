<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'Admin@ZeelenbergArchitectuur.com',
            'email_verified_at' => now(),
            'password' => bcrypt('sustainable'), // password
        ]);
    }
}
