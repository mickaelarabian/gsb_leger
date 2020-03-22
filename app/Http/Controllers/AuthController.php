<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
           $email = $request->get('email');
           $password = $request->get('password');
           if(isset($email) && isset($password)){
             if(Auth::attempt(['email' => $email, 'password' => $password])){
                 return redirect('/');
             } else{
                return redirect('/login');
             }
           } else{
                return redirect('/login');
           }
        }else{
            return redirect('/');
        }

    }

    public function signup(Request $request){
        $user = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'status' => $request->input('status'),
            'dateNaissance' => $request->input('dateNaissance'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
            'codePostal' => $request->input('codePostal'),
            'ville' => $request->input('ville'),
            'password' => Hash::make($request->input('password'))
        ];
        User::create($user);
        Auth::attempt(['email' => $user['email'], 'password' => $user['email']]);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
