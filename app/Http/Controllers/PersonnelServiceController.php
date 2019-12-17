<?php

namespace App\Http\Controllers;
use App\Personnel_Service;
use Illuminate\Http\Request;

class PersonnelServiceController extends Controller
{
    public function create(Request $request){
        $service = [
            'nom' => $request->input('nom'),
            'budget' => $request->input('budget'),
            'siege_id' => $request->input('siege_id'),
        ];
        Personnel_Service::create($service);
    }

    public function getAllFromService()
    {
        $personnels = Personnel_Service::all();
        return Controller::responseJson(200, "Le personnolle du ont été retournés", $personnels);
    }
}
