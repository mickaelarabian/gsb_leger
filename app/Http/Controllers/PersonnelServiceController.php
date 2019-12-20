<?php

namespace App\Http\Controllers;
use App\Personnel_Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonnelServiceController extends Controller
{
    public function create(Request $request, $id){
        $personnel_service = [
            'personnel_id' => $request->input('personnel_id'),
            'service_id' => $id,
            'date' => Carbon::now()
        ];
        Personnel_Service::create($personnel_service);
        return back();
    }

    public function delete($id, $id2){
        $Personnel_Service = Personnel_Service::where('personnel_id', $id)->where('service_id',$id2);
        $Personnel_Service->delete();
        return back();
    }

    public function getAllFromService($id)
    {
        $personnels = Personnel_Service::where('service_id', $id);
        return Controller::responseJson(200, "Le personnell du service ont été retournés", $personnels);
    }
}
