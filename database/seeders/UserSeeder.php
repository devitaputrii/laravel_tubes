<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Tripoli',
                'email' => 'tripoli_nakmetal@gmail.com',
                'password' => Hash::make('aswd1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'Tripoli User 1',
                'email' => 'tripoli1@gmail.com',
                'password' => Hash::make('aswd1234'),
                'role' => 'user'
            ],
            [
                'name' => 'Tripoli User 2',
                'email' => 'tripoli2@gmail.com',
                'password' => Hash::make('aswd1234'),
                'role' => 'user'
            ]
        ]);
    }
}
