<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat akun admin utama
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Buat beberapa user team
        User::factory(3)->create([
            'role' => 'team',
        ]);

        // Buat beberapa client
        $clients = Client::factory(5)->create();

        // Buat beberapa service
        $services = Service::factory(5)->create();

        // Buat project dan kaitkan dengan services
        $projects = Project::factory(8)->create()->each(function ($project) use ($services) {
            $project->services()->attach(
                $services->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Buat testimonial untuk beberapa client
        Testimonial::factory(5)->create([
            'client_id' => $clients->random()->id,
        ]);
    }
}
