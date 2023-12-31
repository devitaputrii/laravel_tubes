<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tentang_kamis')->insert([
        	'judul' => 'Tentang kami',
        	'deskripsi' => "Key's Laundry adalah layanan laundry yang didedikasikan untuk memberikan pengalaman laundry yang cepat, bersih, dan handal. Kami memiliki tim profesional yang terlatih dengan baik dan menggunakan peralatan canggih untuk memastikan pakaian Anda dicuci dan dirawat dengan baik. "
        ]);
    }
}
