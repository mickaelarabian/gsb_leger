<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function getAllFromSiege($id)
    {
        $services = Service::where('siege_id', $id)->get();
        //return Controller::responseJson(200, "Les services ont été retournés", $services);
        return view('/services', compact('services'));
    }

    public function create(Request $request){
        $service = [
            'nom' => $request->input('nom'),
            'budget' => $request->input('budget'),
            'siege_id' => $request->input('siege_id'),
        ];
        Service::create($service);
    }

    public function getAll()
    {
        $services = Service::all();
        return Controller::responseJson(200, "Les services ont été retournés", $services);
    }
}
