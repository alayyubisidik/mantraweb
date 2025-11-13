<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Landing Page Xpress',
                'slug' => Str::slug('Landing Page Xpress'),
                'description' => 'Landing Page Xpress dirancang untuk membantu bisnis Anda tampil profesional secara instan. Dengan konsep single-page yang efisien, setiap elemen difokuskan untuk meningkatkan konversi pelanggan. Tersedia berbagai layout menarik yang responsif di semua perangkat, lengkap dengan tombol CTA yang strategis. Cocok untuk peluncuran produk baru, promosi event, hingga kampanye marketing digital. Solusi ini ideal bagi Anda yang ingin tampil cepat online tanpa mengorbankan kualitas desain dan performa.',
                'price_start' => 750000,
                'price_max' => 1500000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Company Profile Kit',
                'slug' => Str::slug('Company Profile Kit'),
                'description' => 'Company Profile Kit adalah paket website profesional untuk menampilkan identitas perusahaan Anda secara elegan dan terpercaya. Website ini mencakup halaman profil, visi & misi, layanan, portofolio, hingga kontak yang dilengkapi formulir interaktif. Dibangun dengan desain modern, mudah dikelola, serta SEO-friendly untuk mendukung citra brand di dunia digital. Sangat cocok untuk perusahaan, instansi, maupun organisasi yang ingin meningkatkan kredibilitas bisnis dan memperluas jangkauan pasar secara online.',
                'price_start' => 2000000,
                'price_max' => 3500000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Personal Landing',
                'slug' => Str::slug('Personal Landing'),
                'description' => 'Personal Landing adalah website portofolio satu halaman untuk menampilkan profil pribadi, karya, dan kontak Anda dengan gaya profesional. Dirancang untuk freelancer, desainer, fotografer, atau siapa pun yang ingin memperkuat personal branding secara digital. Website ini menonjolkan keunikan Anda melalui desain minimalis, animasi halus, serta layout yang rapi. Dilengkapi dengan area testimoni, galeri, dan tautan ke media sosial, membuat Anda terlihat lebih kredibel di mata calon klien maupun rekan kerja.',
                'price_start' => 500000,
                'price_max' => 1200000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'UMKM Startup',
                'slug' => Str::slug('UMKM Startup'),
                'description' => 'UMKM Startup dikembangkan khusus untuk pelaku usaha kecil dan menengah yang ingin naik kelas di dunia digital. Dengan desain profesional dan fitur yang relevan, website ini membantu bisnis Anda terlihat lebih meyakinkan di mata pelanggan. Dilengkapi katalog produk, testimoni, peta lokasi, serta integrasi WhatsApp agar transaksi lebih mudah. Paket ini sangat cocok bagi brand lokal, toko online kecil, maupun startup yang baru mulai membangun reputasi digital secara efisien dan terjangkau.',
                'price_start' => 1000000,
                'price_max' => 2500000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Web Blog',
                'slug' => Str::slug('Web Blog'),
                'description' => 'Web Blog hadir untuk Anda yang ingin berbagi cerita, wawasan, atau konten kreatif melalui platform blog modern. Didesain dengan sistem manajemen konten yang mudah digunakan, Anda bisa menulis, mengedit, dan mempublikasikan artikel dengan cepat tanpa perlu keahlian teknis. Fitur pencarian, kategori, serta kolom komentar sudah terintegrasi dengan baik. Selain itu, desainnya responsif, ringan, dan SEO-ready agar konten Anda tampil optimal di hasil pencarian Google.',
                'price_start' => 800000,
                'price_max' => 1800000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Digital Card Mini-Site',
                'slug' => Str::slug('Digital Card Mini-Site'),
                'description' => 'Digital Card Mini-Site adalah kartu nama digital yang dapat diakses kapan saja, di mana saja. Cukup kirim tautan, dan penerima langsung bisa melihat profil, portofolio, kontak, serta tautan media sosial Anda dalam satu halaman elegan. Cocok untuk profesional, pebisnis, dan kreator yang ingin tampil lebih modern dan mudah dihubungi. Dengan desain responsif dan animasi halus, mini-site ini menjadi cara baru memperkenalkan diri secara digital — praktis, cepat, dan berkesan.',
                'price_start' => 400000,
                'price_max' => 900000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
            [
                'name' => 'E-Vitation Web',
                'slug' => Str::slug('E-Vitation Web'),
                'description' => 'E-Vitation Web adalah solusi undangan digital interaktif untuk pernikahan, ulang tahun, atau acara spesial lainnya. Dilengkapi dengan galeri foto, RSVP online, peta lokasi, dan hitung mundur acara. Desainnya dapat disesuaikan dengan tema dan warna acara, memberikan kesan elegan sekaligus ramah lingkungan tanpa perlu mencetak undangan fisik. Dengan tampilan yang indah dan navigasi yang mudah, setiap tamu akan mendapatkan pengalaman yang berkesan saat menerima undangan Anda.',
                'price_start' => 600000,
                'price_max' => 1200000,
                'thumbnail_url' => null,
                'status' => 'active',
            ],
        ];

        $categories = Category::all();
        $features = Feature::all();
        $sections = Section::all();

        foreach ($products as $data) {
            $product = Product::create($data);

            // Random kategori (1-2)
            $product->categories()->attach(
                $categories->random(rand(1, 2))->pluck('id')->toArray()
            );

            // Random fitur (3-6)
            $product->features()->attach(
                $features->random(rand(3, 6))->pluck('id')->toArray()
            );

            // Random section (6-12)
            $product->sections()->attach(
                $sections->random(rand(6, 12))->pluck('id')->toArray()
            );
        }
    }
}
