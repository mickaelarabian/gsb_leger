<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function displayLogin(){
        return view('login');
    }

    public function login(Request $request){
        auth()->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        return redirect('/');
    }

    public function logout(){

        return redirect('/login');
    }
}
