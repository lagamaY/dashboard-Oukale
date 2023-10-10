<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContrôleAdistanceController extends Controller
{
    //
    public function getContrôleAdistance(){
        return view('pages.contrôleAdistance');
    }
}
