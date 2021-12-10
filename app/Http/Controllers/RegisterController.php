<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
           'name' => ['required', 'max:255', 'unique:users'],
           'email' => ['required', 'email:dns', 'unique:users'],
           'password' => ['required', 'min:5', 'max:255'],
           'level' => ['required'],
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        $request->session()->flash('success', 'Selamat Akun Berhasil Dibuat!');

        return redirect('/halLogin2');

    }

    public function tampilkan(){
        return view ("register");
    }
}
