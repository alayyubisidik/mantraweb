<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Project;
use App\Models\Section;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'Web App', 'description' => 'A dynamic application that runs in a web browser, designed for complex functionalities.'],
            ['name' => 'E-Commerce', 'description' => 'An online platform for selling and buying products or services.'],
            ['name' => 'Company Profile', 'description' => 'A website that introduces a company, its values, and services.'],
            ['name' => 'Portfolio', 'description' => 'A showcase of personal or professional works and projects.'],
            ['name' => 'Landing Page', 'description' => 'A single-page website focused on marketing or lead generation purposes.'],
        ];


        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // ===== FEATURES =====
        $features = [
            ['name' => 'Responsive Design'],
            ['name' => 'SEO Optimization'],
            ['name' => 'Admin Dashboard'],
            ['name' => 'Payment Integration'],
            ['name' => 'Dark Mode'],
            ['name' => 'Multi-language'],
            ['name' => 'User Authentication'],
            ['name' => 'Custom CMS'],
        ];

        foreach ($features as $featureData) {
            Feature::create($featureData);
        }

        // ===== SECTIONS =====
        $sections = [
            ['name' => 'Home Section'],
            ['name' => 'About Section'],
            ['name' => 'Services Section'],
            ['name' => 'Portfolio Section'],
            ['name' => 'Testimonial Section'],
            ['name' => 'Contact Section'],
            ['name' => 'Pricing Section'],
            ['name' => 'FAQ Section'],
        ];

        foreach ($sections as $sectionData) {
            Section::create($sectionData);
        }

        // ===== PRODUCTS =====
        $products = [
            [
                'name' => 'Landing Page Xpress',
                'description' => 'Landing page cepat dan elegan untuk bisnis startup.',
                'price_start' => 500000,
                'price_max' => 1000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Company Profile Kit',
                'description' => 'Website company profile profesional dan modern.',
                'price_start' => 1500000,
                'price_max' => 2500000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'E-Commerce Pro',
                'description' => 'Toko online lengkap dengan fitur pembayaran otomatis.',
                'price_start' => 3000000,
                'price_max' => 6000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'inactive',
            ],
            [
                'name' => 'Portfolio Creator',
                'description' => 'Website portfolio modern untuk menampilkan karya profesional.',
                'price_start' => 1000000,
                'price_max' => 2000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Business Website Pro',
                'description' => 'Website bisnis lengkap dengan halaman layanan dan kontak.',
                'price_start' => 2500000,
                'price_max' => 4000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Restaurant Landing Page',
                'description' => 'Landing page khusus restoran dengan menu digital dan reservasi.',
                'price_start' => 1800000,
                'price_max' => 3000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Education Portal',
                'description' => 'Platform edukasi dengan dashboard siswa dan pengajar.',
                'price_start' => 4000000,
                'price_max' => 7000000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Real Estate Showcase',
                'description' => 'Website properti dengan filter lokasi dan galeri foto.',
                'price_start' => 3500000,
                'price_max' => 6500000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'inactive',
            ],
            [
                'name' => 'Event Organizer Site',
                'description' => 'Website event organizer dengan sistem booking online.',
                'price_start' => 2000000,
                'price_max' => 3500000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
            [
                'name' => 'Personal Blog Platform',
                'description' => 'Blog modern dengan CMS dan SEO optimization.',
                'price_start' => 1200000,
                'price_max' => 2500000,
                'thumbnail_url' => '/defaults/thumbnail.png',
                'status' => 'active',
            ],
        ];

        // ===== INSERT & ATTACH RELATIONS =====
        foreach ($products as $productData) {
            $product = Product::create([
                'name' => $productData['name'],
                'slug' => Str::slug($productData['name']),
                'description' => $productData['description'],
                'price_start' => $productData['price_start'],
                'price_max' => $productData['price_max'],
                'thumbnail_url' => $productData['thumbnail_url'],
                'status' => $productData['status'],
            ]);

            // Hubungkan product ke kategori (random 1–2)
            $product->categories()->attach(
                Category::inRandomOrder()->take(rand(1, 2))->pluck('id')
            );

            // Hubungkan product ke fitur (random 2–4)
            $product->features()->attach(
                Feature::inRandomOrder()->take(rand(2, 4))->pluck('id')
            );

            // Hubungkan product ke section (random 3–5)
            $product->sections()->attach(
                Section::inRandomOrder()->take(rand(3, 5))->pluck('id')
            );
        }

        $this->call(UserSeeder::class);
    }
}
