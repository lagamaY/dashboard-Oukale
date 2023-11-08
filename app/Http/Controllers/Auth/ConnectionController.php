<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class ConnectionController extends Controller
{
    // Afficher la page de connexion
    public function getConnexion(){
        return view('auth.connexion');
    }

    public function getConnexionUser(Request $request){
        $request -> validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->route('accueil');
            }
            else{
                return back()->with('fail', 'Password no matches.');
            }
        } else {
            return back() ->with('fail', 'This email is not registered');
        }
    }

    public function getDeconnexionUser(){
        if(Session::has('loginId')){
            Session::pull('loginId');

            return redirect()->route('connexion');
        }
    }
}
