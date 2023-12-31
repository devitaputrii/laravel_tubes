<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DaftarHargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftar_hargas')->insert([
			[
				'kelompok' => 'Kiloan',
				'name' => 'Cuci Kering',
				'minimal' => 2.0,
				'estimasi' => 3,
				'harga' => 4500
			],
			[
				'kelompok' => 'Kiloan',
				'name' => 'Cuci Kering',
				'minimal' => 2.0,
				'estimasi' => 1,
				'harga' => 6000
			],
			[
				'kelompok' => 'Kiloan',
				'name' => 'Kain Tenda/Kursi',
				'minimal' => 3.0,
				'estimasi' => 3,
				'harga' => 12000
			],
			[
				'kelompok' => 'Kiloan',
				'name' => 'Kg 1 Hari',
				'minimal' => 2.0,
				'estimasi' => 1,
				'harga' => 9000
			],
			[
				'kelompok' => 'Kiloan',
				'name' => 'Kg 2 Hari',
				'minimal' => 2.0,
				'estimasi' => 2,
				'harga' => 7000
			],
			[
				'kelompok' => 'Kiloan',
				'name' => 'Kg 3 Hari',
				'minimal' => 2.0,
				'estimasi' => 3,
				'harga' => 6000
			],
			[
				'kelompok' => 'Cuci Sepatu & Tas',
				'name' => '1 Hari Jadi',
				'minimal' => 1,
				'estimasi' => 1,
				'harga' => 25000
			],
			[
				'kelompok' => 'Cuci Sepatu & Tas',
				'name' => '2 Hari Jadi',
				'minimal' => 1,
				'estimasi' => 2,
				'harga' => 20000
			],
			[
				'kelompok' => 'Cuci Sepatu & Tas',
				'name' => '3 Hari Jadi',
				'minimal' => 1,
				'estimasi' => 3,
				'harga' => 15000
			],
			[
				'kelompok' => 'Cuci Sepatu & Tas',
				'name' => 'Tas Biasa',
				'minimal' => 1,
				'estimasi' => 3,
				'harga' => 15000
			]
		]);
    }
}
