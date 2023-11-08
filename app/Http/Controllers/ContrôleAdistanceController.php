<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class ContrôleAdistanceController extends Controller
{
    //
    public function getContrôleAdistance(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.contrôleAdistance', compact('data'));
    }
}
