<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnTempsReelController extends Controller
{
    //
    public function getEnTempsReel(){
        return view('pages.donnesTerrain.enTempsReel');
    }
}
