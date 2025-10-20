<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = Client::all();

        if ($clients->count() > 0) {
            Testimonial::factory(5)->create([
                'client_id' => $clients->random()->id,
            ]);
        }
    }
}
