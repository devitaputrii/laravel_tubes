<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('kontaks')->insert([
            'judul' => 'Butuh jasa kami?',
            'deskripsi' => 'Kami jamin pakaian Anda kembali seperti baru',
            'no_hp' => '08952580602',
            'alamat' => 'Jl. Sukabirus No.101, Citeureup, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257'
        ]);
    }
}
