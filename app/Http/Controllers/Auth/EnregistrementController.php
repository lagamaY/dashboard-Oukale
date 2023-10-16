<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnregistrementController extends Controller
{
    //
    // Afficher la page de connexion
    public function getEnregistrement(){
        return view('auth.enregistrement');
    }
}
