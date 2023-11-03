<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class EnTempsReelController extends Controller
{

    public function getEnTempsReel()
    {
        // Exécutez le script Python et capturez la sortie
        // $output = exec('python C:\Users\cyril\OneDrive\Bureau\mbot-ros\mbot-ros\mbot-ros.py');

        // // Vous pouvez ensuite traiter la sortie pour extraire les données de température
        // // Par exemple, si le script Python imprime la température, vous pouvez faire quelque chose comme :
        // $temperature = $output; // Convertissez la sortie en nombre

        // Affichez la température dans la vue

        // Exécutez le script Python et capturez la sortie
        // $output = shell_exec('python C:\Users\cyril\OneDrive\Bureau\mbot-ros\mbot-ros\mbot-ros.py');
        // $output2 = shell_exec('python C:\Users\cyril\OneDrive\Bureau\mbot-ros\mbot-ros\mbot-ros-light.py');
        // $output3= shell_exec('python C:\Users\cyril\OneDrive\Bureau\mbot-ros\mbot-ros\mbot-ros-sense.py');
        $output = shell_exec('python ../../../../../resources/scripts/mbot-ros.py');
        $output2 = shell_exec('python ../../../../../resources/scripts/mbot-ros-light.py');
        $output3= shell_exec('python ../../../../../resources/scripts/mbot-ros-sense.py');

    // Assurez-vous que la sortie est un nombre (en supprimant les caractères non numériques)
        $temperature = floatval(preg_replace('/[^0-9.]/', '', $output));
        $temperature = number_format($temperature, 2); // Formatage avec deux chiffres après la virgule

        $light = floatval(preg_replace('/[^0-9.]/', '', $output2));
        $light = number_format($light, 2);

        $dbsense = floatval(preg_replace('/[^0-9.]/', '', $output3));
        $dbsense = number_format($dbsense, 2);


        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.donnesTerrain.enTempsReel', compact('data'),['temperature' => $temperature,'light' => $light,'dbsense' => $dbsense]);
        // return view('pages.donnesTerrain.enTempsReel');
    }


    // public function getEnTempsReel()
    // {

    //     return view('pages.donnesTerrain.enTempsReel');
    // }
}
