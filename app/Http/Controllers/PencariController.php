<?php

namespace App\Http\Controllers;

use App\Models\PencariKerja;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencariController extends Controller
{
    
    public function update(Request $request,  $pencariKerja){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'skill' => 'required',
            'phone_number' => 'required'
        ]);

        PencariKerja::where('id', $pencariKerja)->update($validatedData);
        return redirect('/your_profile');
    }

    public function listLowongan(){
        return view('pencari.applied', [
            'lowongans' => PencariKerja::where('id', '=', auth('pencari')->user()->id)->first()->lowongans,
        ]);
    }

    public function applyLowongan(Request $request){
        DB::table('apply_lowongan')->insert([
            'pencari_kerja_id' => auth('pencari')->user()->id,
            'lowongan_id' => $request->id
        ]);
        return redirect('/pencari/list-lowongan');
    }

    public function show(Lowongan $job){
        return view('pencari.detail_applied', ['job' => $job]);
    }
}
