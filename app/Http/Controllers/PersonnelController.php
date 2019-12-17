<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;

class PersonnelController extends Controller
{
    public function getAll()
    {
        $personnels = Personnel::all();
        //return Controller::responseJson(200, "Les personnels ont été retournés", $personnels);
        return view('/personnels', compact('personnels'));
    }

    public function create(Request $request){
        $personnel = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'dateNaissance' => $request->input('dateNaissance'),
            'telephone' => $request->input('telephone'),
            'password' => $request->input('password'),
        ];
        Personnel::create($personnel);
    }

    public function delete($id){
        Personnel::destroy($id);
        return redirect('/personnels');
    }
}
