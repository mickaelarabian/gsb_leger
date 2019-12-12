<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siege;

class SiegeController extends Controller
{
    public function getAll()
    {
        $sieges = Siege::all();
        return Controller::responseJson(200, "Les sieges ont été retournés", $sieges);
    }

    public function getSiege($id){
        try {
            $siege = Siege::findOrFail($id);
        } catch (\Throwable $th){

        }
        return Controller::responseJson(200, "Le siege $id a été retourné", $siege);
    }

    public function delete($id){
        Siege::destroy($id);
    }

    public function create(Request $request){
        $siege = [
            'nom' => $request->input('nom'),
            'ville' => $request->input('ville'),
            'pays' => $request->input('pays'),
            'budget' => $request->input('budget'),
        ];
        Siege::create($siege);
    }

    public function update(Request $request, $id){
        try {
            $siege = Siege::findOrFail($id);
            $siege = [
                'nom' => $request->input('nom'),
                'ville' => $request->input('ville'),
                'pays' => $request->input('pays'),
                'budget' => $request->input('budget'),
            ];
            Siege::update($siege);
        } catch (\Throwable $th){

        }
        return Controller::responseJson(200, "Le siege $id a été modifié", $siege);
    }

    public function count(){
        $count = Siege::all()->count();
        return Controller::responseJson(200, "Succes", $count);
    }

}
