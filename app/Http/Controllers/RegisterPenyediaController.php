<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\PencariKerja;
use App\Models\PenyediaKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPenyediaController extends Controller
{
    public function index()
    {
        return view('penyedia.register_penyedia');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'company_name' => 'required',
            'email' => 'required|email:dns|unique:penyedia_kerjas',
            'password' => 'required|min:5',
            'location' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        PenyediaKerja::create($validatedData);
        
        return redirect('/login_penyedia');
    }

    public function pencariYangMendaftarLowongan(){
        return response()->json([
            'pencari_kerjas' => Lowongan::where('id', '=', 1)->first()->pencariKerjas,
        ]);
    }
}
