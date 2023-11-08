<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class EnregistrementController extends Controller
{
    //
    // Afficher la page de connexion
    public function getEnregistrement(){
        return view('auth.enregistrement');
    }

    public function getEnregistrementUser(Request $request) {
        $request -> validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12|confirmed',
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        
        $res = $user->save();
        if ($res) {
            return back() ->with('success', 'Enregistrement effectué avec succès');
        } else {
            return back() ->with('fail', 'Échec lors de la procédure d\'enregistrement');
        }

    }
}


