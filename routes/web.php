<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

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
    return view('pencari.home_pencari');
});

Route::get('/motivation_pencari', function(){
    return view('pencari.motivation_pencari');
});

Route::get('/news_pencari', function(){
    return view('pencari.news_pencari');
});

// Route::get('/jobs_pencari', function(){
//     return view('pencari.jobs_pencari');
// });

Route::get('/video_pencari', function(){
    return view('pencari.video_pencari');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
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

// Route::get('/input_lowongan', function () {
//     return view('penyedia.input_lowongan');
// });

Route::get('/jobs_pencari', [LowonganController::class, 'index']);
Route::get('/input_lowongan', [LowonganController::class, 'create']);
Route::post('/input_lowongan', [LowonganController::class, 'store']);