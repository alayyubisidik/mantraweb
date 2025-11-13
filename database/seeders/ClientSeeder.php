<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Andika Pratama',
                'job_title' => 'Marketing Manager',
                'email' => 'andika.pratama@bintangcorp.com',
                'phone' => '081234567890',
                'address' => 'Jl. Melati No. 12, Jakarta Selatan',
                'company' => 'PT Bintang Corp',
            ],
            [
                'name' => 'Rina Kurniasih',
                'job_title' => 'HR Specialist',
                'email' => 'rina.kurniasih@sinergy.co.id',
                'phone' => '081298765432',
                'address' => 'Jl. Kenanga No. 8, Bandung',
                'company' => 'PT Sinergy Indonesia',
            ],
            [
                'name' => 'Ahmad Rizqi',
                'job_title' => 'Software Engineer',
                'email' => 'ahmad.rizqi@teknoid.com',
                'phone' => '082134567899',
                'address' => 'Jl. Merpati No. 22, Surabaya',
                'company' => 'TeknoID Solutions',
            ],
            [
                'name' => 'Sinta Lestari',
                'job_title' => 'Graphic Designer',
                'email' => 'sinta.lestari@visualworks.id',
                'phone' => '081256789012',
                'address' => 'Jl. Kamboja No. 45, Yogyakarta',
                'company' => 'VisualWorks Studio',
            ],
            [
                'name' => 'Dimas Nugroho',
                'job_title' => 'Project Manager',
                'email' => 'dimas.nugroho@buildmax.co.id',
                'phone' => '085612345678',
                'address' => 'Jl. Mawar No. 33, Semarang',
                'company' => 'BuildMax Construction',
            ],
            [
                'name' => 'Laila Amalia',
                'job_title' => 'Sales Executive',
                'email' => 'laila.amalia@freshmart.com',
                'phone' => '081377766655',
                'address' => 'Jl. Anggrek No. 19, Medan',
                'company' => 'FreshMart Retail',
            ],
            [
                'name' => 'Reza Firmansyah',
                'job_title' => 'Data Analyst',
                'email' => 'reza.firmansyah@insightdata.co',
                'phone' => '081212312312',
                'address' => 'Jl. Dahlia No. 11, Bekasi',
                'company' => 'InsightData Analytics',
            ],
            [
                'name' => 'Maya Hapsari',
                'job_title' => 'Customer Support',
                'email' => 'maya.hapsari@helpdeskplus.net',
                'phone' => '081400099911',
                'address' => 'Jl. Cempaka No. 25, Depok',
                'company' => 'HelpDesk Plus',
            ],
            [
                'name' => 'Bagus Santoso',
                'job_title' => 'Finance Officer',
                'email' => 'bagus.santoso@finacorp.id',
                'phone' => '082198877665',
                'address' => 'Jl. Melur No. 77, Malang',
                'company' => 'FinaCorp Indonesia',
            ],
            [
                'name' => 'Tiara Widjaja',
                'job_title' => 'Product Designer',
                'email' => 'tiara.widjaja@creativelab.co',
                'phone' => '081345667788',
                'address' => 'Jl. Teratai No. 5, Bali',
                'company' => 'CreativeLab Studio',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
