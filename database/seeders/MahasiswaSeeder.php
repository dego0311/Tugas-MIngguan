<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert(
            [
                'name' => "Naufal Dhegondo",
                'nim' => 13242420048,
                'prodi' => "Teknologi Informasi",
                'email' => "Dego@gmail.com",
                'nohp' => "085609644440",
            ]);
    }
}
