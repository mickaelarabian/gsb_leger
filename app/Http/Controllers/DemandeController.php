<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function getAll()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $demandes = Demande::all();
        $current = 'demandes';
        return view('demandes', compact('demandes', 'current'));
    }
}
