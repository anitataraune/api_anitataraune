<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone',
            'price' => 699.99,
            'category_id' => 1, // Assuming Electronics category has ID 1
            'image' => 'https://example.com/images/smartphone.jpg',
        ]);

        Product::create([
            'name' => 'Laptop',
            'price' => 1299.99,
            'category_id' => 1, // Assuming Electronics category has ID 1
            'image' => 'https://example.com/images/laptop.jpg',
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'price' => 19.99,
            'category_id' => 2, // Assuming Fashion category has ID 2
            'image' => 'https://example.com/images/tshirt.jpg',
        ]);

        Product::create([
            'name' => 'Jeans',
            'price' => 49.99,
            'category_id' => 2, // Assuming Fashion category has ID 2
            'image' => 'https://example.com/images/jeans.jpg',
        ]);

        Product::create([
            'name' => 'Sofa',
            'price' => 499.99,
            'category_id' => 3, // Assuming Home & Garden category has ID 3
            'image' => 'https://example.com/images/sofa.jpg',
        ]);

        Product::create([
            'name' => 'Coffee Table',
            'price' => 149.99,
            'category_id' => 3, // Assuming Home & Garden category has ID 3
            'image' => 'https://example.com/images/coffee_table.jpg',
        ]);
    }
}
