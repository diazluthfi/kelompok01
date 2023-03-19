<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilregister(){
        return view('register');
    }

    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> 'member',
        ]);

        return redirect()->route('login');

    }
    public function tampillogin()
    {
        return view('login');
    }

    // memproses login
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $isSuccessLogin = Auth::attempt($data);

        if ($isSuccessLogin){
            return redirect()->route('destinasi.show');
        }
        else{
            return redirect()->route('logout');
        }

    }

    // memproses logout
    public function logout ()
    {
        Auth::logout();
        return redirect('login');
    }

}


