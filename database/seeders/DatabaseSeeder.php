<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TeamSeeder::class,
            ClientSeeder::class,
            CategorySeeder::class,   // meski kamu isi manual, biar gak error tetap bisa dideklarasikan
            ProjectSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
