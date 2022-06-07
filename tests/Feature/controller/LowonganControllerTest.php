<?php

namespace Tests\Feature;

use App\Http\Controllers\RegisterPencariController;
use App\Models\PenyediaKerja;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class LowonganControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        assertEquals(true, true);
    }

    public function test_when_user_upload_image(){
        $file = UploadedFile::fake()->image('hello.jpg');

        $penyedia = PenyediaKerja::create([
            'company_name' => 'Test',
            'location' => 'Jakarta Selatan',
            'password' =>'test123',
            'email' => 'test@gmail.com'
        ]);

        $this->actingAs($penyedia, 'penyedia')->postJson('/input_lowongan',[
            'pekerjaan' => 'Programmer',
            'nama_perusahaan' => 'Golek',
            'lokasi' => 'Jakarta Selatan',
            'pengalaman' => '2 Tahun',
            'kualifikasi' => 'Bisa Ngoding',
            'gaji' => 1000000,
            'persyaratan' => 'S1 Informatika',
            'gambar' => $file
        ]);
        $waktu = time();
        $fileName = $file->getClientOriginalName();
        $this->assertFileExists(public_path().'/Gambar/logo/'.$waktu.$fileName);
    }

    public function test_when_user_does_not_upload_image(){

        $penyedia = PenyediaKerja::create([
            'company_name' => 'Test',
            'location' => 'Jakarta Selatan',
            'password' =>'test123',
            'email' => 'test@gmail.com'
        ]);

        $response = $this->actingAs($penyedia, 'penyedia')->postJson('/input_lowongan',[
            'pekerjaan' => 'Programmer',
            'nama_perusahaan' => 'Golek',
            'lokasi' => 'Jakarta Selatan',
            'pengalaman' => '2 Tahun',
            'kualifikasi' => 'Bisa Ngoding',
            'gaji' => 1000000,
            'persyaratan' => 'S1 Informatika',
        ]);

        $response->assertJsonValidationErrors(['gambar']);
    }
}
