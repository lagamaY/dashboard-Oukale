<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    // Afficher la page de connexion
    public function getConnexion(){
        return view('auth.connexion');
    }
}
