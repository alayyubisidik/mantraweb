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
use App\Models\Team;
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
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            FeatureSeeder::class,
            SectionSeeder::class,

            ProductSeeder::class,
            ClientSeeder::class,
            TeamSeeder::class,

            ProjectSeeder::class,
            TestimonialSeeder::class,
        ]);

    }
}
