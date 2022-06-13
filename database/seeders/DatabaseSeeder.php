<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\Berita;
use App\Models\Lowongan;
use App\Models\PencariKerja;
use App\Models\PenyediaKerja;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $penyedia1 = PenyediaKerja::create([
            'company_name' => 'Golek',
            'email' => 'golek@gmail.com',
            'password' => Hash::make('password'),
            'location' => 'Jakarta Selatan',
        ]);

        $penyedia2 = PenyediaKerja::create([
            'company_name' => 'TokoToki',
            'email' => 'tokotoki@gmail.com',
            'password' => Hash::make('password'),
            'location' => 'Jakarta Barat',
        ]);

        $penyedia3 = PenyediaKerja::create([
            'company_name' => 'Tokopedia',
            'email' => 'graphic.rizky17@gmail.com',
            'password' => Hash::make('password'),
            'location' => 'Jakarta',
        ]);

        $pencari1 = PencariKerja::create([
            'name' => 'Kadek Rizky Fransisca Putra',
            'email' => 'rizky.royal@gmail.com',
            'password' => Hash::make('password'),
            'skill' => 'Software Engineer',
            'phone_number' => '081938713808'
        ]);

        $pencari2 = PencariKerja::create([
            'name' => 'Rafly Rhamadhan',
            'email' => 'rafly@gmail.com',
            'password' => Hash::make('password'),
            'skill' => 'Software Engineer',
            'phone_number' => '081938713808'
        ]);

        $pencari3 = PencariKerja::create([
            'name' => 'Rizky Khoiruddin',
            'email' => 'graphic.rizky17@gmail.com',
            'password' => Hash::make('password'),
            'skill' => 'Frontend Developer',
            'phone_number' => '081310101010'
        ]);

        $lowongan1 = Lowongan::create([
            'pekerjaan' => 'Web Developer',
            'nama_perusahaan' => 'Modernland Indonesia',
            'lokasi' => 'Tangerang',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 7000000,
            'persyaratan' => 'Menguasai bidang Web Developer',
            'gambar' => '1652448333modernland.png',
            'penyedia_kerja_id' =>  $penyedia1->id
        ]);
        $lowongan2 = Lowongan::create([
            'pekerjaan' => 'Software Engineer',
            'nama_perusahaan' => 'Gojek',
            'lokasi' => 'Jakarta',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 4000000,
            'persyaratan' => 'Menguasai bidang Software Engineer',
            'gambar' => '1652448333logo-gojek.png',
            'penyedia_kerja_id' =>  $penyedia1->id
        ]);
        $lowongan3 = Lowongan::create([
            'pekerjaan' => 'Software Engineer',
            'nama_perusahaan' => 'Tokopedia',
            'lokasi' => 'Jakarta',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 4000000,
            'persyaratan' => 'Menguasai bidang Software Engineer',
            'gambar' => '1652448333logo-tokopedia.png',
            'penyedia_kerja_id' =>  $penyedia3->id
        ]);
        $lowongan4 = Lowongan::create([
            'pekerjaan' => 'Backend Developer',
            'nama_perusahaan' => 'Gojek',
            'lokasi' => 'Jakarta',
            'pengalaman' => '1 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 3000000,
            'persyaratan' => 'Menguasai bidang Backend Developer',
            'gambar' => '1652448333logo-gojek.png',
            'penyedia_kerja_id' =>  $penyedia2->id
        ]);
        $lowongan5 = Lowongan::create([
            'pekerjaan' => 'Frontend Developer',
            'nama_perusahaan' => 'Astra Internasional',
            'lokasi' => 'Jakarta',
            'pengalaman' => '2 tahun',
            'kualifikasi' => 'Sarjana (S1)',
            'gaji' => 7000000,
            'persyaratan' => 'Menguasai bidang Frontend Developer',
            'gambar' => '1652448333astra.png',
            'penyedia_kerja_id' =>  $penyedia2->id
        ]);

        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => $pencari1->id,
            'lowongan_id' => $lowongan1->id
        ]);
        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => $pencari1->id,
            'lowongan_id' => $lowongan2->id
        ]);
        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => $pencari1->id,
            'lowongan_id' => $lowongan3->id
        ]);
        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => $pencari2->id,
            'lowongan_id' => $lowongan4->id
        ]);
        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => $pencari2->id,
            'lowongan_id' => $lowongan5->id
        ]);
        Berita::create([
            'judul' => '5 Advantages of Working in a Small Company, More Achievements!',
            'penulis' => 'Rizky Khoiruddin',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur! Fuga magni ab quibusdam fugiat veritatis non rerum cum doloribus hic, placeat ut numquam harum a nihil exercitationem, aperiam aliquam deleniti labore dolores pariatur? Optio, qui praesentium. Voluptas non recusandae sapiente facilis quod corrupti debitis molestiae ut, consequuntur natus expedita in asperiores et quis ipsa incidunt? Reprehenderit aut earum accusamus, architecto totam corporis! Pariatur, debitis? Libero in dignissimos voluptatibus laudantium reprehenderit ad repellat? Natus tempore vitae, quisquam tempora, quia harum cupiditate similique iure perferendis obcaecati ea. Blanditiis expedita ut voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur!',
            'gambar' => 'img-news-1.png',
        ]);
        Berita::create([
            'judul' => '5 Things That Can Cause Your Career To Stop, Here the Solution!',
            'penulis' => 'Kadek Rizky Fransisca Putera',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur! Fuga magni ab quibusdam fugiat veritatis non rerum cum doloribus hic, placeat ut numquam harum a nihil exercitationem, aperiam aliquam deleniti labore dolores pariatur? Optio, qui praesentium. Voluptas non recusandae sapiente facilis quod corrupti debitis molestiae ut, consequuntur natus expedita in asperiores et quis ipsa incidunt? Reprehenderit aut earum accusamus, architecto totam corporis! Pariatur, debitis? Libero in dignissimos voluptatibus laudantium reprehenderit ad repellat? Natus tempore vitae, quisquam tempora, quia harum cupiditate similique iure perferendis obcaecati ea. Blanditiis expedita ut voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat quaerat et dignissimos optio repudiandae assumenda voluptatibus illo, veritatis pariatur!',
            'gambar' => 'img-news-2.png',
        ]);
        Video::create([
            'kode_video' => 'C2AU3_p42D0'
        ]);
        Video::create([
            'kode_video' => 'yONFaYifCdM'
        ]);
        Video::create([
            'kode_video' => 'wMawdgZe1wY'
        ]);
        Video::create([
            'kode_video' => 'k_Yg0jvDFr4'
        ]);
    }
}

