<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ulasans')->insert([
            [
                'judul' => 'Baju bersih',
                'rating' => 5,
                'ulasan' => 'Baju saya menjadi bersih dan wangi, sangat memuaskan',
                'user_id' => 2
            ],
            [
                'judul' => 'Pelayanan cepat',
                'rating' => 5,
                'ulasan' => 'Dengan paket cepat pakaian saya selesai hanya dalam waktu 1 hari',
                'user_id' => 3
            ]
        ]);
    }
}
