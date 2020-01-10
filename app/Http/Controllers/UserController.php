<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAll()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $personnels = User::all();
        $current = 'personnels';
        //return Controller::responseJson(200, "Les personnels ont été retournés", $personnels);
        return view('/personnels', compact('personnels', 'current'));
    }

    public function getPersonnel($id){
        try {
            $personnel = User::findOrFail($id);
        } catch (\Throwable $th){

        }
        return $personnel;
    }

    public function create(Request $request){
        $personnel = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'status' => $request->input('status'),
            'dateNaissance' => $request->input('dateNaissance'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
            'codePostal' => $request->input('codePostal'),
            'ville' => $request->input('ville'),
            'password' => $request->input('password'),
        ];
        User::create($personnel);
        return redirect('/personnels');
    }

    public function displayCreate(){
        return view('/personnel/add');
    }

    public function displayUpdate($id){
        $personnel = UserController::getPersonnel($id);
        return view('/personnel/update', compact('personnel'));
    }

    public function update(Request $request){
        $service = User::findOrFail($request->id);
        $parameter = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'status' => $request->input('status'),
            'dateNaissance' => $request->input('dateNaissance'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
            'codePostal' => $request->input('codePostal'),
            'ville' => $request->input('ville')
        ];
        $service->update($parameter);
        return redirect('/personnels');
}

    public function delete($id){
        User::destroy($id);
        return redirect('/personnels');
    }
}
