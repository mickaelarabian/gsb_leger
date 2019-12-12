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
}
