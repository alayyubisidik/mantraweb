<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Landing Page',
                'description' => 'Landing page merupakan halaman tunggal yang dirancang khusus untuk tujuan promosi atau konversi, seperti memperkenalkan produk, mengumpulkan prospek, atau mengarahkan pengunjung ke tindakan tertentu. Dengan desain yang menarik dan pesan yang jelas, landing page membantu bisnis meningkatkan efektivitas kampanye digital serta memberikan kesan profesional kepada calon pelanggan.',
            ],
            [
                'name' => 'Web App',
                'description' => 'Web App adalah aplikasi berbasis web yang dapat diakses melalui browser dan berfungsi layaknya software pada komputer atau perangkat mobile. Biasanya digunakan untuk kebutuhan bisnis seperti sistem manajemen, dashboard analitik, atau platform layanan daring. Web App memungkinkan pengguna untuk berinteraksi secara dinamis tanpa perlu menginstal aplikasi tambahan, sehingga efisien dan mudah diakses dari mana saja.',
            ],
            [
                'name' => 'E-Commerce',
                'description' => 'Kategori ini mencakup website toko online yang mendukung aktivitas jual beli produk atau jasa secara digital. E-Commerce dibangun dengan fitur seperti katalog produk, sistem keranjang belanja, metode pembayaran online, serta pelacakan pesanan. Dengan tampilan menarik dan navigasi yang mudah, platform ini membantu pelaku bisnis memperluas jangkauan pasar dan meningkatkan penjualan secara signifikan.',
            ],
            [
                'name' => 'Portfolio',
                'description' => 'Website portofolio berfungsi sebagai media untuk menampilkan karya, proyek, dan pencapaian seseorang atau sebuah tim secara visual dan terstruktur. Cocok digunakan oleh desainer, fotografer, pengembang web, atau agensi kreatif. Dengan desain elegan dan navigasi yang intuitif, kategori ini membantu meningkatkan kredibilitas dan memperkuat citra profesional di mata klien.',
            ],
            [
                'name' => 'Government',
                'description' => 'Website kategori Government ditujukan bagi instansi pemerintah untuk menyampaikan informasi publik, layanan masyarakat, serta pengumuman resmi secara transparan dan mudah diakses. Desainnya mengutamakan kejelasan struktur, aksesibilitas tinggi, serta kemudahan bagi warga untuk menemukan informasi penting seperti regulasi, program kerja, dan berita terkini.',
            ],
            [
                'name' => 'Company Profile',
                'description' => 'Website company profile merupakan sarana bagi perusahaan untuk menampilkan identitas, visi misi, layanan, portofolio, dan informasi kontak secara profesional. Desainnya dibuat menarik dan representatif agar mencerminkan citra serta nilai perusahaan. Dengan struktur yang informatif dan modern, website jenis ini berfungsi sebagai media branding sekaligus alat komunikasi strategis dengan klien maupun calon mitra bisnis.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
