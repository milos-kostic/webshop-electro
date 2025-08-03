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
        // Create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            // You can add password and role if needed here
            'password' => bcrypt('password'), // add if you want a password
            'role' => 'user', // default role or remove if none
        ]);

        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@webshop.test',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);


        $this->call([
            CategoriesTableSeeder::class,
            // Other seeders...
        ]);
    }
}
