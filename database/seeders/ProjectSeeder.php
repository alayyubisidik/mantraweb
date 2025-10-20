<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::factory(10)->create();
        $categories = Category::all();

        if ($categories->count() > 0) {
            foreach ($projects as $project) {
                $project->categories()->attach(
                    $categories->random(rand(1, min(3, $categories->count())))->pluck('id')->toArray()
                );
            }
        }
    }
}
