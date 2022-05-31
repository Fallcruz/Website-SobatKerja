<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Repositories\LowonganInterface;

class LowonganController extends Controller
{
    protected $lowongan;
    public function __construct(LowonganInterface $lowongan)
    {
        $this->lowongan = $lowongan;
    }
    public function index(){
        return view('pencari.jobs_pencari', [
            'list' => $this->lowongan->all()
        ]);
    }

    public function createLowongan(){
        return view('penyedia.input_lowongan');
    }

    private function validateData(Request $request){
        return $request->validate([
            'pekerjaan' => 'required|max:255',
            'nama_perusahaan' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'pengalaman' => 'required|max:255',
            'kualifikasi' => 'required|max:255',
            'gaji' => 'required',
            'persyaratan' => 'required',
        ]);
    }

    public function storeData(Request $request){
        $validatedData = $this->validateData($request);

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

        $this->lowongan->store($validatedData);
        return redirect('/input_lowongan')->with('success', 'Data berhasil disimpan');;
    }
}
