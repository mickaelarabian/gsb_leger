<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Personnel;
use App\Personnel_Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
    public function getAllFromSiege($id)
    {
        $services = Service::where('siege_id', $id)->get();
        //return Controller::responseJson(200, "Les services ont été retournés", $services);
        return view('/services', compact('services', 'id'));
    }

    public function create(Request $request, $id){
        $service = [
            'nom' => $request->input('nom'),
            'budget' => $request->input('budget'),
            'siege_id' => $id
        ];
        Service::create($service);
        return redirect('/sieges');
    }

    public function delete($id){
        Service::destroy($id);
        return back();
    }

    public function getAll()
    {
        $services = Service::all();
        return Controller::responseJson(200, "Les services ont été retournés", $services);
    }

    public function getService($id){
        try {
            $service = Service::where('id', $id)
                ->with(['personnels', 'depenses'])
                ->first();
            //recup toutes les personnes qui ne sont pas dans le service
            $personnelsEnservice = Personnel_Service::select('personnel_id')->where('service_id', $id)->get();
            $personnels = Personnel::whereNotIn('id', $personnelsEnservice)->get();

        } catch (ModelNotFoundException $e){

        }
        //return Controller::responseJson(200, "Le service $id a été retourné", $service);
        return view('/service', compact('service', 'personnels'));
    }

    public function displayCreate($id){

        return view('/service/add', compact('id'));
    }
}
