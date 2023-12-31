<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KomplainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komplains')->insert([
			[
				'nama' => 'Tripoli 1',
				'email' => 'tripoli1@gmail.com',
				'img_nota' => '/gambar/nota.jpg',
				'status' => 'Komplain',
				'deskripsi' => 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.'
			],
			[
				'nama' => 'Tripoli 2',
				'email' => 'tripoli2@gmail.com',
				'img_nota' => '/gambar/nota.jpg',
				'status' => 'Komplain',
				'deskripsi' => 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.'
			],
			[
				'nama' => 'Tripoli 3',
				'email' => 'tripoli3@gmail.com',
				'img_nota' => '/gambar/nota.jpg',
				'status' => 'Selesai',
				'deskripsi' => 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.'
			]
		]);
    }
}
