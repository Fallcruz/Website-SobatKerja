<?php

use App\Models\Berita;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
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

Route::get('/login_pencari', function(){
    return view('pencari.login_pencari');
});

Route::get('/register_pencari', function(){
    return view('pencari.register_pencari');
});

Route::get('/home_pencari', function(){
    return view('pencari.home_pencari', [
        'listJobs' => Lowongan::all(),
        'listNews' => Berita::all()
    ]);
});

Route::get('/motivation_pencari', function(){
    return view('pencari.motivation_pencari');
});

Route::get('/news_pencari', function(){
    return view('pencari.news_pencari', [
        'list' => Berita::all()
    ]);
});

Route::get('/video_pencari', function(){
    return view('pencari.video_pencari', [
        'list' => Video::all()
    ]);
});
Route::get('/your_profile', function(){
    return view('pencari.profil_pencari');
});

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
});
Route::get('/register_penyedia', function () {
    return view('penyedia.register_penyedia');
});
Route::get('/home_penyedia', function () {
    return view('penyedia.home_penyedia');
});
Route::get('/daftar_pelamar', function () {
    return view('penyedia.daftar_pelamar');
});
// Route::get('/input_lowongan', function () {
//     return view('penyedia.input_lowongan');
// });

Route::get('/jobs_pencari', [LowonganController::class, 'index']);
Route::get('/input_lowongan', [LowonganController::class, 'createLowongan']);
Route::post('/input_lowongan', [LowonganController::class, 'storeData']);