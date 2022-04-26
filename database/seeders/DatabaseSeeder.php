<?php

namespace Database\Seeders;

use App\Models\Lowongan;
use App\Models\Berita;
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
        Berita::create([
            'judul' => '5 Advantages of Working in a Small Company, More Achievements!',
            'penulis' => 'Rizky Khoiruddin',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur! Fuga magni ab quibusdam fugiat veritatis non rerum cum doloribus hic, placeat ut numquam harum a nihil exercitationem, aperiam aliquam deleniti labore dolores pariatur? Optio, qui praesentium. Voluptas non recusandae sapiente facilis quod corrupti debitis molestiae ut, consequuntur natus expedita in asperiores et quis ipsa incidunt? Reprehenderit aut earum accusamus, architecto totam corporis! Pariatur, debitis? Libero in dignissimos voluptatibus laudantium reprehenderit ad repellat? Natus tempore vitae, quisquam tempora, quia harum cupiditate similique iure perferendis obcaecati ea. Blanditiis expedita ut voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur!',
            'gambar' => 'img-news-1.png',
        ]);
    }
}

