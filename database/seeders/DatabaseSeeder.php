<?php

namespace Database\Seeders;

use App\Models\Lowongan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Lowongan::create([
            'pekerjaan' => 'Software Engineer',
            'nama_perusahaan' => 'Tokopedia',
            'lokasi' => 'Jakarta',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 4000000,
            'persyaratan' => 'Menguasai bidang Software Engineer',
        ]);
        Lowongan::create([
            'pekerjaan' => 'Software Engineer',
            'nama_perusahaan' => 'Gojek',
            'lokasi' => 'Jakarta',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 4000000,
            'persyaratan' => 'Menguasai bidang Software Engineer',
        ]);
        Lowongan::create([
            'pekerjaan' => 'Backend Developer',
            'nama_perusahaan' => 'Gojek',
            'lokasi' => 'Jakarta',
            'pengalaman' => '1 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 3000000,
            'persyaratan' => 'Menguasai bidang Backend Developer',
        ]);
    }
}
