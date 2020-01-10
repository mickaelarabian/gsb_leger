<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siege;
use App\Service;
use App\User;
use App\User_Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
    public function getAllFromSiege($id)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $services = Service::where('siege_id', $id)->get();
        $siege = Siege::findOrFail($id);
        //return Controller::responseJson(200, "Les services ont été retournés", $services);
        return view('/services', compact('services', 'siege'));
    }

    public function create(Request $request, $id){
        if(!Auth::check()){
            return redirect('/login');
        }
        $service = [
            'nom' => $request->input('nom'),
            'budget' => $request->input('budget'),
            'siege_id' => $id
        ];
        Service::create($service);
        return redirect('/sieges');
    }

    public function delete($id){
        if(!Auth::check()){
            return redirect('/login');
        }
        Service::destroy($id);
        return back();
    }

    public function getAll()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $services = Service::all();
        return Controller::responseJson(200, "Les services ont été retournés", $services);
    }

    public function getService($id){
        if(!Auth::check()){
            return redirect('/login');
        }
        try {
            $service = Service::where('id', $id)
                ->with(['personnels', 'depenses', 'siege'])
                ->first();
            $personnelsEnservice = User_Service::select('user_id')->where('service_id', $id)->get();
            $personnels = User::whereNotIn('id', $personnelsEnservice)->get();
            // $siege = Siege::select('nom')->where('id', $service->siege_id)->first();

        } catch (ModelNotFoundException $e){

        }
        //return Controller::responseJson(200, "Le service $id a été retourné", $service);
        return view('/service', compact('service', 'personnels'));
    }

    public function displayCreate($id){
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('/service/add', compact('id'));
    }

    public function displayUpdate($id){
        if(!Auth::check()){
            return redirect('/login');
        }
        $service = Service::findOrFail($id);
        return view('/service/update', compact('service', 'id'));
    }

    public function update(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $service = Service::findOrFail($request->id);
        $parameter = [
            'nom' => $request->input('nom'),
            'budget' => $request->input('budget'),
        ];
        $service->update($parameter);
        return redirect('/services/'.$request->id.'');
    }

    public function updateBudget(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $service = Service::findOrFail($request->id);
        $parameter = [
            'budget' => $request->input('budget'),
        ];
        $service->update($parameter);
    return back();
}
}
