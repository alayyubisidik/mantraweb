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
                'name' => 'Landing Page',
                'description' => 'lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Web App',
                'description' => 'lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'E-Commerce',
                'description' => 'lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Portfolio',
                'description' => 'lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Government',
                'description' => 'lorem ipsum dolor sit amet',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
