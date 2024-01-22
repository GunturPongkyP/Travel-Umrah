<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'nama_travel' => 'PT AL FAZAR TOURS HAJI DAN UMROH',
            'alamat' => 'KP Parung Cabok ',
            'deskripsi' => 'Deskripsi travel',
            'email' => 'alfazartours@gmail.com',
            'telepon' => '082119893012',
        ]);
    }
}
