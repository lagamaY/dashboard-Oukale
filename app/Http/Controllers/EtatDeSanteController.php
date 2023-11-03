<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class EtatDeSanteController extends Controller
{
    //
    public function getEtatDeSante(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.oukalê.etatDeSante', compact('data'));
    }
}
