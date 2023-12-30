<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            [
                'judul' => 'Mesin Cuci Berkualitas',
                'img' => '/gambar/mesin cuci.jpeg',
                'deskripsi' => 'Mesin cuci kami memiliki kualitas kapasitas yang cukup besar untuk menampung jumlah cucian yang signifikan. Hal ini memungkinkan untuk mencuci sejumlah besar pakaian sekaligus, mengurangi frekuensi mencuci.'
            ],
            [
                'judul' => 'Lokasi Strategis',
                'img' => '/gambar/lokasi laundry.jpeg',
                'deskripsi' => 'Lokasi laundry yang strategis mudah diakses oleh customer, Terletak di daerah Sukabirus dekat dengan Kampus Telkom.'
            ],
            [
                'judul' => 'Tempat Penyimpanan',
                'img' => '/gambar/rak penyimpanan.jpeg',
                'deskripsi' => 'Memiliki tempat penyimpanan dengan ruangan yang bersih dan aman untuk menjaga pakaian pelanggan tetap terjaga kualitasnya. Kebersihan dan keamanan lingkungan penyimpanan sangat penting untuk memastikan bahwa pakaian tetap dalam kondisi terbaik.'
            ]
        ]);
    }
}
