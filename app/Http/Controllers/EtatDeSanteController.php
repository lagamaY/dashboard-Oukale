<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtatDeSanteController extends Controller
{
    //
    public function getEtatDeSante(){
        return view('pages.oukalê.etatDeSante');
    }
}
