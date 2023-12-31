<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            DaftarHargaSeeder::class,
            GaleriSeeder::class,
            HomeSeeder::class,
            KomplainSeeder::class,
            KontakSeeder::class,
            LayananSeeder::class,
            ProsesSeeder::class,
            TentangKamiSeeder::class,
            UlasanSeeder::class
        ]);
    }
}
