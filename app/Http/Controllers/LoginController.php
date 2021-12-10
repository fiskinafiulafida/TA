<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $login = $request->validate([
            'email' => ['required', 'email:dns', ],
            'password' => ['required'],
        ]);

        // dd($login);

        if(Auth::attempt($login)){
            if(auth()->user()->level == 1){
                $request->session()->regenerate();

                return redirect()->intended('bukuAdmin');
            } else if  (auth()->user()->level == 2){
                $request->session()->regenerate();

                return redirect()->intended('homeMember');
            } else {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Gagal Login!');
    }

    public function tampilkan(){
        return view("login");
    }

    // public function test(){
    //     return "halo";
    // }
}
