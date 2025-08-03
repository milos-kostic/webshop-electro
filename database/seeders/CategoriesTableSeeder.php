<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Laptops',
                'description' => 'All kinds of laptops',
                'slug' => 'laptops',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smartphones',
                'description' => 'Mobile phones and smartphones',
                'slug' => 'smartphones',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tablets',
                'description' => 'Tablets and e-readers',
                'slug' => 'tablets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Accessories',
                'description' => 'Cables, chargers, cases and other accessories',
                'slug' => 'accessories',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Monitors',
                'description' => 'Computer monitors and displays',
                'slug' => 'monitors',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Components',
                'description' => 'PC components like CPUs, GPUs, RAM',
                'slug' => 'components',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // Using insert() instead of create() for better performance
        Category::insert($categories);
    }
}
