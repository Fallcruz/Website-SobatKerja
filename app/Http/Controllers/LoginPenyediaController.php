<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPenyediaController extends Controller
{
    public function index()
    {
        return view('penyedia.login_penyedia');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::guard('penyedia')->attempt($credentials)){
            // regenerate => untuk menghindari session fixation
            $request->session()->regenerate();

            return redirect()->intended('/home_penyedia');
        }

        return back();
    }

    public function signout(Request $request)
    {
        Auth::guard('penyedia')->logout();
        
        //* invalidin sessionnya supaya ga bisa dipakai
        $request->session()->invalidate();
        
        //* bikin baru supaya ga dibajak, session fixation
        $request->session()->regenerateToken();
    
        return redirect('/login_penyedia');
    }
}
