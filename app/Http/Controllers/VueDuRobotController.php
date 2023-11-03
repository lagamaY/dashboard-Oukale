<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class VueDuRobotController extends Controller
{

    public function getVueDuRobot()
    {



        // Exécutez le script Python et capturez la sortie
        $output = shell_exec('python C:\Users\cyril\OneDrive\Bureau\mbot-ros\mbot-ros\test.py');

        // Vérifiez la sortie pour déterminer l'état
        $status = trim($output); // Supprimez les espaces en début et fin

        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.donnesTerrain.vueDuRobot', compact('data'), ['status' => $status]);
    }

    // public function getVueDuRobot()
    // {

    //     return view('pages.donnesTerrain.vueDuRobot');
    // }
}
