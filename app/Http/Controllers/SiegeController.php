<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siege;
use Illuminate\Support\Facades\Auth;

class SiegeController extends Controller
{
    public function getAll()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $sieges = Siege::all();
        //return Controller::responseJson(200, "Les sieges ont été retournés", $sieges);
        return view('sieges', compact('sieges'));
    }

    public function getSiege($id){
        try {
            $siege = Siege::findOrFail($id);
        } catch (\Throwable $th){

        }
        return $siege;
    }

    public function delete($id){
        Siege::destroy($id);
        return redirect('/');
    }

    public function create(Request $request){
        $siege = [
            'nom' => $request->input('nom'),
            'ville' => $request->input('ville'),
            'pays' => $request->input('pays')
        ];
        Siege::create($siege);
        return redirect('/');
    }

    public function displayCreate(){
        return view('/siege/add');
    }

    public function displayUpdate($id){
        $siege = SiegeController::getSiege($id);
        return view('/siege/update', compact('siege'));
    }

    public function update(Request $request){
            $siege = Siege::findOrFail($request->id);
            $parameter = [
                'id' => $request->input('id'),
                'nom' => $request->input('nom'),
                'ville' => $request->input('ville'),
                'pays' => $request->input('pays')
            ];
            $siege->update($parameter);
        return redirect('/sieges');
    }

    public function count(){
        $count = Siege::all()->count();
        return Controller::responseJson(200, "Succes", $count);
    }

}
