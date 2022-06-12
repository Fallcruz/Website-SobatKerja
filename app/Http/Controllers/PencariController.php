<?php

namespace App\Http\Controllers;

use App\Models\PencariKerja;
use Illuminate\Http\Request;

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
}
