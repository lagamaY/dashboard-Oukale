<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReinitialerMotDePasseController extends Controller
{
    // Affichage page de réinitialisation
    public function getReinitialerMotDePasseOublie(){
        return view('auth.reinitialiserMotDePasse');
    }
}
