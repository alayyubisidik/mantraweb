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
        $projects = [
            [
                'product_id' => 4,
                'client_id' => 1,
                'title' => 'SmartPay Mobile',
                'slug' => 'smartpay-mobile',
                'description' => 'Platform pembayaran digital modern dengan UI interaktif dan transaksi cepat. SmartPay Mobile menghadirkan solusi transaksi cashless dengan desain antarmuka yang elegan, responsif, dan mudah digunakan di berbagai perangkat. Fitur notifikasi real-time, integrasi QRIS, serta keamanan tingkat tinggi menjadikannya pilihan ideal untuk bisnis dan pengguna pribadi yang ingin bertransaksi tanpa repot.',
                'thumbnail_url' => null,
                'project_url' => 'https://smartpay.app',
                'start_date' => '2025-02-01 00:00:00',
                'end_date' => '2025-07-15 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 5,
                'client_id' => 2,
                'title' => 'Nature&Book',
                'slug' => 'nature-and-book',
                'description' => 'Website katalog buku ramah lingkungan dengan desain minimalis dan warna earthy. Nature&Book mengusung konsep slow reading dan keberlanjutan, menampilkan koleksi buku bertema alam dengan visual yang menenangkan. Sistem filter interaktif dan fitur wishlist memungkinkan pengguna menjelajahi bacaan berdasarkan genre, tema, dan dampak ekologisnya, sambil memberikan pengalaman membaca yang tenang dan bermakna.',
                'thumbnail_url' => null,
                'project_url' => 'https://naturebook.id',
                'start_date' => '2025-04-10 00:00:00',
                'end_date' => '2025-09-20 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 6,
                'client_id' => 3,
                'title' => 'CardStack',
                'slug' => 'cardstack',
                'description' => 'Halaman promosi produk kartu digital dengan animasi lembut dan fokus pada branding. CardStack memadukan visual elegan dan transisi halus untuk memamerkan fitur produk secara interaktif. Setiap elemen halaman dioptimalkan untuk storytelling, dengan penekanan pada estetika, identitas merek, dan kemudahan konversi pengguna melalui CTA yang strategis.',
                'thumbnail_url' => null,
                'project_url' => 'https://cardstack.co',
                'start_date' => '2025-05-01 00:00:00',
                'end_date' => '2025-08-15 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 2,
                'client_id' => 4,
                'title' => 'GreenLens',
                'slug' => 'greenlens',
                'description' => 'Aplikasi berbasis web untuk dokumentasi lingkungan dan pelaporan publik. GreenLens membantu organisasi non-profit dan pemerintah dalam memantau kondisi alam melalui foto, laporan warga, dan peta interaktif. Desainnya ringan namun informatif, dengan sistem kategori dinamis untuk memudahkan klasifikasi laporan dan fitur validasi berbasis lokasi GPS.',
                'thumbnail_url' => null,
                'project_url' => 'https://greenlens.gov.id',
                'start_date' => '2025-06-05 00:00:00',
                'end_date' => '2025-07-01 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 2,
                'client_id' => 5,
                'title' => 'BlueLink Dashboard',
                'slug' => 'bluelink-dashboard',
                'description' => 'Dashboard profesional untuk manajemen proyek digital dengan visual interaktif. BlueLink menggabungkan data kompleks menjadi insight visual dengan grafik, progress bar, dan notifikasi real-time. Didesain untuk tim kreatif dan agensi, sistem ini mempermudah koordinasi antar anggota dengan antarmuka modular dan sistem keamanan multi-level.',
                'thumbnail_url' => null,
                'project_url' => 'https://bluelink.io',
                'start_date' => '2025-08-01 00:00:00',
                'end_date' => '2025-10-01 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 3,
                'client_id' => 6,
                'title' => 'DesertFrame Studio',
                'slug' => 'desertframe-studio',
                'description' => 'Website portofolio artistik dengan latar gurun dan nuansa sinematik. DesertFrame Studio menonjolkan karya fotografi dan desain produk dengan pencahayaan yang dramatis dan tekstur halus. Setiap halaman diatur seperti galeri seni digital, menghadirkan pengalaman eksploratif yang memikat dan menginspirasi pengunjung.',
                'thumbnail_url' => null,
                'project_url' => 'https://desertframe.art',
                'start_date' => '2025-03-01 00:00:00',
                'end_date' => '2025-08-30 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 7,
                'client_id' => 7,
                'title' => 'Flora Invite',
                'slug' => 'flora-invite',
                'description' => 'Website undangan digital bertema bunga lembut dengan efek animasi elegan dan tata letak yang indah. Flora Invite dirancang untuk pasangan modern yang ingin mengirim undangan berkesan secara online. Dengan fitur RSVP otomatis, galeri foto, serta peta lokasi, pengalaman tamu menjadi lebih interaktif dan personal.',
                'thumbnail_url' => null,
                'project_url' => 'https://florainvite.id',
                'start_date' => '2025-02-12 00:00:00',
                'end_date' => '2025-05-05 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 5,
                'client_id' => 8,
                'title' => 'NeoTech Blog',
                'slug' => 'neotech-blog',
                'description' => 'Platform blog teknologi dengan fokus pada tren digital dan desain modern. NeoTech Blog menggunakan layout modular dan tipografi clean untuk menonjolkan konten analisis mendalam. Dilengkapi dengan sistem komentar dinamis, dark mode, dan optimasi SEO bawaan untuk menjangkau audiens global.',
                'thumbnail_url' => null,
                'project_url' => 'https://neotech.blog',
                'start_date' => '2025-05-10 00:00:00',
                'end_date' => '2025-09-30 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 1,
                'client_id' => 9,
                'title' => 'MochaSpace Café',
                'slug' => 'mochaspace-cafe',
                'description' => 'Website coffee shop modern dengan desain hangat dan sistem pemesanan digital. MochaSpace Café menyatukan estetika kopi dengan pengalaman interaktif, menampilkan menu bergambar, fitur reservasi meja, dan integrasi sistem pembayaran online. Visualnya dibuat konsisten dengan warna coklat lembut dan tekstur kayu.',
                'thumbnail_url' => null,
                'project_url' => 'https://mochaspace.cafe',
                'start_date' => '2025-03-22 00:00:00',
                'end_date' => '2025-07-10 00:00:00',
                'status' => 'published',
            ],
            [
                'product_id' => 3,
                'client_id' => 10,
                'title' => 'PureLens Studio',
                'slug' => 'purelens-studio',
                'description' => 'Situs portfolio fotografi profesional dengan tema putih bersih dan tata letak galeri elegan. PureLens Studio berfokus pada pencahayaan, tekstur, dan ketajaman visual karya, menjadikannya ideal untuk fotografer yang ingin membangun reputasi digital yang kuat.',
                'thumbnail_url' => null,
                'project_url' => 'https://purelens.studio',
                'start_date' => '2025-01-10 00:00:00',
                'end_date' => '2025-06-20 00:00:00',
                'status' => 'published',
            ],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
