<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
