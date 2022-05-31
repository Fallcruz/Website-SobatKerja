<?php

namespace App\Http\Controllers;

use App\Models\PencariKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPencariController extends Controller
{
    public function index()
    {
        return view('pencari.register_pencari');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:pencari_kerjas',
            'password' => 'required|min:5',
            'skill' => 'required',
            'phone_number' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        PencariKerja::create($validatedData);
        return redirect('/login-pencari');
    }
}
