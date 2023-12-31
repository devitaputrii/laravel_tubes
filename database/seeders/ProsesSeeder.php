<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proses')->insert([
			[
				'tema' => 'Proses Kami',
				'sub_tema' => 'Bagaimana kami bekerja',
				'icon' => '/img/icon/time-fast-svgrepo-com.svg',
				'judul' => 'Proses Pengerjaan Kilat',
				'deskripsi' => "KEYS Laundry Telkom University memiliki salah satu keunggulan, yaitu proses pengerjaan KILAT terhadap laundry pelanggan"
			],
			[
				'tema' => 'Proses Kami',
				'sub_tema' => 'Bagaimana kami bekerja',
				'icon' => '/img/icon/services-icon2.svg',
				'judul' => 'Laundry Berkualitas',
				'deskripsi' => "KEY’S Laundry Telkom University selalu menjaga kualitas pakaian anda dengan hanya menggunakan deterjen pilihan"
			],
			[
				'tema' => 'Proses Kami',
				'sub_tema' => 'Bagaimana kami bekerja',
				'icon' => '/img/icon/indonesian-rupiah-indonesia-svgrepo-com.svg',
				'judul' => 'Harga Terjangkau',
				'deskripsi' => "KEY’S Laundry Telkom University memiliki harga yang terjangkau untuk mahasiswa Telkom hanya Rp6000"
			]
		]);
    }
}
