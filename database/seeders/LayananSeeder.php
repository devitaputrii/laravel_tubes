<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
			[
				'tema' => 'Layanan',
				'sub_tema' => 'Layanan yang kami tawarkan',
				'img1' => '/img/gallery/offers4.png',
				'img2' => '/img/gallery/offers2.png',
				'judul' => 'Laundry Reguler',
				'deskripsi' => 'Hanya dengan Rp6.000/Kg kami jamin pakaian Anda kembali bersih dan wangi!!'
			],
			[
				'tema' => 'Layanan',
				'sub_tema' => 'Layanan yang kami tawarkan',
				'img1' => '/img/gallery/offers2.png',
				'img2' => '/img/gallery/offers1.png',
				'judul' => 'Laundry Kilat',
				'deskripsi' => '5 jam kami jamin sudah sampai ditangan Anda, mulai dari Rp10.000/Kg!!'
			]
		]);
	}
}
