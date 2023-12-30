<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
        	'img_banner' => '../img/hero/h1_hero.png',
        	'judul' => "Key's Laundry",
        	'deskirpsi' => 'Jasa Laundry Express terbaik di Bandung, kami hadir untuk penuhi kebutuhan laundry Anda'
        ]);
    }
}
