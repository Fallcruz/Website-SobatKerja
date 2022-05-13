<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function index(){
        return view('pencari.jobs_pencari', [
            'list' => Lowongan::all()
        ]);
    }

    public function createLowongan(){
        return view('penyedia.input_lowongan');
    }

    public function storeData(Request $request){
        $validatedData = $request->validate([
            'pekerjaan' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'pengalaman' => 'required|max:255',
            'kualifikasi' => 'required|max:255',
            'gaji' => 'required',
            'persyaratan' => 'required',
        ]);

        $waktu = "";
            $validatedData['gambar'] = "";
            if($file = $request->hasFile('gambar')) {
                $file = $request->file('gambar') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/Gambar/logo';
                $waktu = time();
                $file->move($destinationPath,$waktu . $fileName);
                $validatedData['gambar'] = $waktu . $fileName;
            }
        
        Lowongan::create($validatedData);
        return redirect('/input_lowongan')->with('success', 'Data berhasil disimpan');;
    }
}
