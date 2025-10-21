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
        // Data project dari factories
        // $projects = Project::factory(10)->create();
        // $categories = Category::all();

        // if ($categories->count() > 0) {
        //     foreach ($projects as $project) {
        //         $project->categories()->attach(
        //             $categories->random(rand(1, min(3, $categories->count())))->pluck('id')->toArray()
        //         );
        //     }
        // }

        $projects = [
            [
                'client_id' => 1,
                'title' => 'SmartPay Mobile',
                'slug' => 'smartpay-mobile',
                'description' => 'Platform pembayaran digital modern dengan UI interaktif dan transaksi cepat.',
                'thumbnail_url' => null,
                'project_url' => 'https://smartpay.app',
                'start_date' => '2025-02-01 00:00:00',
                'end_date' => '2025-07-15 00:00:00',
                'status' => 'published',
                'categories' => ['Web App', 'E-Commerce'],
            ],
            [
                'client_id' => 2,
                'title' => 'Nature&Book',
                'slug' => 'nature-and-book',
                'description' => 'Website katalog buku ramah lingkungan dengan desain minimalis dan warna earthy.',
                'thumbnail_url' => null,
                'project_url' => 'https://naturebook.id',
                'start_date' => '2025-04-10 00:00:00',
                'end_date' => '2025-09-20 00:00:00',
                'status' => 'published',
                'categories' => ['Portfolio', 'Landing Page'],
            ],
            [
                'client_id' => 3,
                'title' => 'CardStack',
                'slug' => 'cardstack',
                'description' => 'Halaman promosi produk kartu digital dengan animasi lembut dan fokus pada branding.',
                'thumbnail_url' => null,
                'project_url' => 'https://cardstack.co',
                'start_date' => '2025-05-01 00:00:00',
                'end_date' => '2025-08-15 00:00:00',
                'status' => 'published',
                'categories' => ['Landing Page', 'Portfolio'],
            ],
            [
                'client_id' => 4,
                'title' => 'GreenLens',
                'slug' => 'greenlens',
                'description' => 'Aplikasi berbasis web untuk dokumentasi lingkungan dan pelaporan publik.',
                'thumbnail_url' => null,
                'project_url' => 'https://greenlens.gov.id',
                'start_date' => '2025-06-05 00:00:00',
                'end_date' => null,
                'status' => 'draft',
                'categories' => ['Web App', 'Government'],
            ],
            [
                'client_id' => 5,
                'title' => 'BlueLink Dashboard',
                'slug' => 'bluelink-dashboard',
                'description' => 'Dashboard profesional untuk manajemen proyek digital dengan visual interaktif.',
                'thumbnail_url' => null,
                'project_url' => 'https://bluelink.io',
                'start_date' => '2025-08-01 00:00:00',
                'end_date' => null,
                'status' => 'draft',
                'categories' => ['Web App', 'Portfolio'],
            ],
        ];

        foreach ($projects as $data) {
            // Simpan project
            $project = Project::create([
                'client_id' => $data['client_id'],
                'title' => $data['title'],
                'slug' => $data['slug'],
                'description' => $data['description'],
                'thumbnail_url' => $data['thumbnail_url'],
                'project_url' => $data['project_url'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => $data['status'],
            ]);

            // Sinkronisasi kategori berdasarkan nama
            $categoryIds = Category::whereIn('name', $data['categories'])->pluck('id');
            $project->categories()->sync($categoryIds);
        }
    }
}
