<?php

use App\Http\Controllers\LoginPencariController;
use App\Http\Controllers\LoginPenyediaController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PencariController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\RegisterPencariController;
use App\Http\Controllers\RegisterPenyediaController;
use App\Models\PencariKerja;
use App\Models\Video;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home_pencari', function(){
    return view('pencari.home_pencari', [
        'listJobs' => Lowongan::all(),
        'listNews' => Berita::all()
    ]);
})->middleware('auth:pencari');

Route::get('/motivation_pencari', function(){
    return view('pencari.motivation_pencari');
})->middleware('auth:pencari');

Route::get('/news_pencari', [BeritaController::class, 'index'])->middleware('auth:pencari');
Route::get('/news_pencari/{new:id}', [BeritaController::class, 'show'])->middleware('auth:pencari');

Route::get('/video_pencari', function(){
    return view('pencari.video_pencari', [
        'list' => Video::all()
    ]);
})->middleware('auth:pencari');

Route::get('/your_profile', function(){
    return view('pencari.profil_pencari');
})->middleware('auth:pencari');

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login_penyedia', function () {
    return view('penyedia.login_penyedia');
})->name('login_penyedia');
Route::post('/login_penyedia', [LoginPenyediaController::class, 'authenticate']);
Route::get('/register_penyedia', function () {
    return view('penyedia.register_penyedia');
});
Route::post('/register_penyedia', [RegisterPenyediaController::class, 'store']);
Route::post('/signout_penyedia', [LoginPenyediaController::class, 'signout']);

Route::get('/home_penyedia', function () {
    return view('penyedia.home_penyedia');
})->middleware('auth:penyedia');
Route::get('/daftar_pelamar', function () {
    return view('penyedia.daftar_pelamar');
})->middleware('auth:penyedia');

Route::get('/jobs_pencari', [LowonganController::class, 'index'])->middleware('auth:pencari');
Route::get('/jobs_pencari/{job:id}', [LowonganController::class, 'show'])->middleware('auth:pencari');
Route::get('/input_lowongan', [LowonganController::class, 'createLowongan'])->middleware('auth:penyedia');
Route::post('/input_lowongan', [LowonganController::class, 'storeData'])->middleware('auth:penyedia');

Route::post('/register-pencari', [RegisterPencariController::class, 'store']);
Route::get('/register-pencari', [RegisterPencariController::class, 'index']);

Route::post('/login-pencari', [LoginPencariController::class, 'authenticate']);
Route::get('/login-pencari', [LoginPencariController::class, 'index'])->name('login-pencari');
Route::post('/signout-pencari', [LoginPencariController::class, 'signout']);

Route::patch('/update_pencari/{pencariKerja}', [PencariController::class, 'update']);




Route::get('/penyedia/list-lowongan', [PenyediaController::class, 'listLowongan']);

Route::get('/penyedia/list-lowongan/{job:id}', [PenyediaController::class, 'show']);

Route::get('/pencari/list-lowongan', [PencariController::class, 'listLowongan']);

Route::post('/pencari/apply-lowongan', [PencariController::class, 'applyLowongan']);


Route::get('/pencari-yang-mendaftar-lowongan', [RegisterPenyediaController::class, 'pencariYangMendaftarLowongan']);