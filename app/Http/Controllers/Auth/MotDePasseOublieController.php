<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User

class MotDePasseOublieController extends Controller
{
    // Affichage de la page de vérification
    public function getMotDePasseOublie(){
        return view('auth.motDePasseOublie');
    }

    // Logique de réinitialisation de mot de passe
    public function MotDePasseOublie(Request $request){
        // Validez les données du formulaire
        $request->validate([
            'email' => 'required|email',
        ]);

        // Vérifiez si l'email existe en base de données
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // L'email n'existe pas en base de données, affichez une erreur
            return back()->with('error', 'Cet email n\'existe pas en base de données.');
        } else {
            return redirect()->route('reinitialiser-mot-de-passe-oublie')->with('email', $request->email);;
        }

        // Générez un jeton de réinitialisation de mot de passe (peut être géré par Laravel)
        // $token = bcrypt(str_random(40));

        // Enregistrez le jeton dans la base de données et créez une entrée pour la réinitialisation du mot de passe

        // Envoie un email au destinataire avec le lien de réinitialisation (peut être géré par Laravel)

        // Redirigez l'utilisateur vers une page de confirmation ou de succès
        // return redirect()->route('reinitialiser-mot-de-passe')->with('success', 'Un lien de réinitialisation de mot de passe a été envoyé à votre email.');
    }
}
