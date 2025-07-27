<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and accessories',
                'external_url' => 'https://example.com/electronics',
            ],
            [
                'name' => 'Clothing',
                'description' => 'Fashion and apparel items',
                'external_url' => 'https://example.com/clothing',
            ],
            [
                'name' => 'Home & Garden',
                'description' => 'Home decor and garden supplies',
                'external_url' => 'https://example.com/home-garden',
            ],
            [
                'name' => 'Sports & Fitness',
                'description' => 'Sports equipment and fitness gear',
                'external_url' => 'https://example.com/sports',
            ],
            [
                'name' => 'Books',
                'description' => 'Books and educational materials',
                'external_url' => 'https://example.com/books',
            ],
            [
                'name' => 'Toys & Games',
                'description' => 'Entertainment and recreational items',
                'external_url' => 'https://example.com/toys-games',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
