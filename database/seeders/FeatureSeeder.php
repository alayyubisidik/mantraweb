<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['name' => 'Responsive Design'],
            ['name' => 'SEO Optimization'],
            ['name' => 'Content Management System'],
            ['name' => 'Custom Domain Support'],
            ['name' => 'User Authentication'],
            ['name' => 'Admin Dashboard'],
            ['name' => 'Payment Gateway Integration'],
            ['name' => 'Email Notification System'],
            ['name' => 'Live Chat Support'],
            ['name' => 'Analytics & Reports'],
            ['name' => 'Multi-language Support'],
            ['name' => 'Blog & News Module'],
            ['name' => 'Image & File Upload'],
            ['name' => 'Dark Mode Theme'],
            ['name' => 'Social Media Integration'],
            ['name' => 'Form Builder'],
            ['name' => 'Role & Permission Management'],
            ['name' => 'Product Catalog System'],
            ['name' => 'Search Engine Feature'],
            ['name' => 'API Integration'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
