<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Anieza Dwi Pangga Aprilia',
                'position' => 'Project Coordinator',
                'profile_url' => null,
            ],
            [
                'name' => 'Al Ayyubi Sidik',
                'position' => 'Backend Developer',
                'profile_url' => null,
            ],
            [
                'name' => 'Fahri Ahmad Zaky',
                'position' => 'Frontend Developer',
                'profile_url' => null,
            ],
            [
                'name' => 'Agung Prasetyadi',
                'position' => 'Content Dokumenter',
                'profile_url' => null,
            ],
            [
                'name' => 'Erlangga Budiaksa',
                'position' => 'Creative Support',
                'profile_url' => null,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
