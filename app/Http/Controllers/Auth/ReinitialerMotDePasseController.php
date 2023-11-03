<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User
use Hash;

class ReinitialerMotDePasseController extends Controller
{
    // Affichage page de réinitialisation
    public function getReinitialerMotDePasseOublie(Request $request){

        $email = $request->session()->get('email'); // Récupère l'e-mail de la session
        // Passez l'e-mail à la vue de réinitialisation
        return view('auth.reinitialiserMotDePasse', ['email' => $email]);

        // return view('auth.reinitialiserMotDePasse');
    }

    // Réinitialisation du mot de passe
    public function ReinitialiserMotDePasse(Request $request){
        // Validez les données du formulaire
        $request->validate([
            'password' => 'required|min:5|max:12|confirmed', // Assurez-vous que le champ de confirmation s'appelle 'password_confirmation'
        ]);

        // // Générez un jeton de réinitialisation de mot de passe (peut être géré par Laravel)
        // $token = bcrypt(str_random(40));

        // Mettez à jour le mot de passe de l'utilisateur
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password); // Assurez-vous d'utiliser bcrypt pour le mot de passe
        $res = $user->save();

        if ($res) {
            return back() ->with('success', 'Modification effectuée avec succès');
        } else {
            return back() ->with('fail', 'Échec lors de la procédure de modification');
        }
        // Enregistrez le jeton dans la base de données

        // Redirigez l'utilisateur vers une page de confirmation ou de succès
        // return redirect()->route('connexion')->with('success', 'Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter.');
        // return redirect()->route('connexion');
    }
}
