<?php

namespace App\Http\Controllers;

use App\Models\PenyediaKerja;
use Illuminate\Http\Request;
use App\Models\Lowongan;

class PenyediaController extends Controller
{
    public function listLowongan(){
        return view('penyedia.daftar_lowongan', [
            'lowongans' => PenyediaKerja::where('id', '=', auth('penyedia')->user()->id)->first()->lowongans,
        ]);
    }
    public function show(Lowongan $job){
        return view('penyedia.detail_lowongan', ['job' => $job]);
    }
}
