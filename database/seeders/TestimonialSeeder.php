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
        // Data dari factories
        // $clients = Client::all();

        // if ($clients->count() > 0) {
        //     Testimonial::factory(5)->create([
        //         'client_id' => $clients->random()->id,
        //     ]);
        // }

        $testimonials = [
            [
                'client_id' => 1,
                'message' => 'Tim pengembang benar-benar profesional! Proyek SmartPay Mobile diselesaikan lebih cepat dari jadwal dan hasilnya melampaui ekspektasi kami. Setiap fitur dirancang dengan detail yang matang — mulai dari tampilan antarmuka yang modern, performa yang ringan, hingga keamanan transaksi yang sangat terjaga.',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 2,
                'message' => 'Bekerja sama dalam pengembangan website Nature&Book adalah pengalaman yang luar biasa. Tim memahami dengan baik konsep brand kami yang menonjolkan kesederhanaan dan nuansa alami. Desain yang dihasilkan sangat elegan, ringan, dan selaras dengan karakter perusahaan kami.',
                'rating' => 4,
                'image_url' => null,
            ],
            [
                'client_id' => 3,
                'message' => 'Proyek CardStack benar-benar menunjukkan dedikasi dan keahlian tim pengembang. Mereka mampu mengubah konsep sederhana menjadi halaman promosi yang atraktif dan profesional. Transisi animasi yang halus, tata letak yang presisi, serta responsivitas yang sempurna membuat hasil akhirnya terlihat premium.',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 4,
                'message' => 'Kolaborasi untuk website VisualWorks Studio berjalan sangat lancar. Tim tidak hanya cepat tanggap terhadap setiap revisi, tapi juga memberi banyak masukan kreatif yang meningkatkan kualitas tampilan secara keseluruhan. Sangat puas dengan hasil akhir yang modern dan dinamis!',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 5,
                'message' => 'BuildMax Construction kini memiliki website company profile yang benar-benar mencerminkan profesionalisme perusahaan kami. Navigasi mudah, tampilan elegan, dan struktur halaman yang rapi membuat calon klien lebih mudah mengenal layanan kami.',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 6,
                'message' => 'Kami memesan website e-commerce sederhana untuk FreshMart dan hasilnya luar biasa! Proses transaksi berjalan mulus, tampilan menarik, dan performa cepat bahkan di perangkat mobile. Terima kasih atas dukungan dan respons cepat selama proses pengembangan.',
                'rating' => 4,
                'image_url' => null,
            ],
            [
                'client_id' => 7,
                'message' => 'Website InsightData Analytics tampil profesional dan informatif berkat tim yang sangat komunikatif dan fokus pada detail. Integrasi dashboard analitik juga bekerja dengan sempurna. Sangat direkomendasikan untuk proyek data-driven!',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 8,
                'message' => 'HelpDesk Plus kini memiliki portal pelanggan yang memudahkan komunikasi dengan klien. Desainnya bersih dan fungsional, serta mudah diakses dari berbagai perangkat. Tim developer sangat terbuka dengan masukan dan cepat menindaklanjuti setiap feedback.',
                'rating' => 4,
                'image_url' => null,
            ],
            [
                'client_id' => 9,
                'message' => 'Website FinaCorp Indonesia tampil jauh lebih profesional dibanding sebelumnya. Dashboard laporan keuangan yang interaktif menjadi nilai tambah besar bagi kami. Terima kasih atas kerja keras dan hasil yang memuaskan!',
                'rating' => 5,
                'image_url' => null,
            ],
            [
                'client_id' => 10,
                'message' => 'CreativeLab Studio akhirnya memiliki portfolio website yang benar-benar mencerminkan identitas brand kami — clean, modern, dan interaktif. Proses pengembangan cepat, komunikatif, dan hasil akhir sempurna!',
                'rating' => 5,
                'image_url' => null,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}
