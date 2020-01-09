<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function displayLogin(){
        if(Auth::check()){
            return redirect('/');
        } else{
            return view('login');
        }
    }

    public function login(Request $request){
        if(!Auth::check()){
           $mail = $request->get('email');
           $password = $request->get('password');
           
            return redirect('/');
        } else{
            return redirect('/');
        }


    }

    public function logout(){

        return redirect('/login');
    }
}
