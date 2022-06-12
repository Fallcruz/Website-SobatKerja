<?php

namespace App\Http\Controllers;

use App\Models\PenyediaKerja;
use Illuminate\Http\Request;

class PenyediaController extends Controller
{
    public function listLowongan(){
        return response()->json([
            'lowongans' => PenyediaKerja::where('id', '=', auth('penyedia')->user()->id)->first()->lowongans,
        ]);
    }
}
