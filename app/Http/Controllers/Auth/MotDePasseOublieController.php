<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotDePasseOublieController extends Controller
{
    // Affichage de la page de vérification
    public function getMotDePasseOublie(){
        return view('auth.motDePasseOublie');
    }
}
