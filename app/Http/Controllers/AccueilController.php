<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AccueilController extends Controller
{
    public function getAccueil(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.accueil', compact('data'));
        // return view('pages.accueil');
    }

}
