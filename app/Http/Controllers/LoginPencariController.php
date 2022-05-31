<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPencariController extends Controller
{
    public function index()
    {
        return view('pencari.login_pencari');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::guard('pencari')->attempt($credentials)){
            // regenerate => untuk menghindari session fixation
            $request->session()->regenerate();

            return redirect()->intended('/home_pencari');
        }

        return back();
    }

    public function signout(Request $request)
    {
        Auth::guard('pencari')->logout();
        
        //* invalidin sessionnya supaya ga bisa dipakai
        $request->session()->invalidate();
        
        //* bikin baru supaya ga dibajak, session fixation
        $request->session()->regenerateToken();
    
        return redirect('/login-pencari');
    }
}
