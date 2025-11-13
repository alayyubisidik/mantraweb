<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['name' => 'Hero Section'],
            ['name' => 'About Us'],
            ['name' => 'Our Services'],
            ['name' => 'Featured Projects'],
            ['name' => 'Portfolio Gallery'],
            ['name' => 'Testimonials'],
            ['name' => 'Our Team'],
            ['name' => 'Pricing Plans'],
            ['name' => 'Frequently Asked Questions'],
            ['name' => 'Contact Us'],
            ['name' => 'Call To Action'],
            ['name' => 'Latest Blog'],
            ['name' => 'Partners & Clients'],
            ['name' => 'Achievements & Awards'],
            ['name' => 'Stats & Metrics'],
            ['name' => 'Product Showcase'],
            ['name' => 'Video Presentation'],
            ['name' => 'Newsletter Subscription'],
            ['name' => 'Download App Section'],
            ['name' => 'Footer'],
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
