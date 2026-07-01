<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'image' => 'https://example.com/images/electronics.jpg',
        ]);
        Category::create([
            'name' => 'Fashion',
            'image' => 'https://example.com/images/fashion.jpg',
        ]);
        Category::create([
            'name' => 'Home & Garden',
            'image' => 'https://example.com/images/home_garden.jpg',
        ]);
    }
}
