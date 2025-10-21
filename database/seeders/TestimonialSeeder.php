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
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}
