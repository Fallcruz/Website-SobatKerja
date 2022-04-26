<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function create(){
        return view('penyedia.input_lowongan');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'pekerjaan' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'pengalaman' => 'required|max:255',
            'kualifikasi' => 'required|max:255',
            'gaji' => 'required',
            'persyaratan' => 'required',
        ]);

        Lowongan::create($validatedData);
        return redirect('/input_lowongan')->with('success', 'Data berhasil disimpan');;
    }
}
