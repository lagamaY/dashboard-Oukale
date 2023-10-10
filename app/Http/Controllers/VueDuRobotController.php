<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueDuRobotController extends Controller
{
    //
    public function getVueDuRobot(){
        return view('pages.donnesTerrain.vueDuRobot');
    }
}
