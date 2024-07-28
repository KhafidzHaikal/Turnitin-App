<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'type' => 0,
            'password' => bcrypt('123')
        ]);
        // User::factory(100)->create();
    }
}
