<?php

namespace App\Http\Controllers;
use App\User_Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function create(Request $request, $id){
        $user_Service = [
            'user_id' => $request->input('personnel_id'),
            'service_id' => $id,
            'date' => Carbon::now()
        ];
        User_Service::create($user_Service);
        return back();
    }

    public function delete($id, $id2){
        $user_Service = User_Service::where('user_id', $id)->where('service_id',$id2);
        $user_Service->delete();
        return back();
    }

    public function getAllFromService($id)
    {
        $personnels = User_Service::where('service_id', $id);
        return Controller::responseJson(200, "Le personnell du service ont été retournés", $personnels);
    }
}