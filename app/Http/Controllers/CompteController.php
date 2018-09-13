<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()){

            flash("Vous devenez vous connecter pour voir cette page.")->error();

            return redirect('/');

        }

        flash("Vous êtes bien connecté.")->success();

        return view('profil');
    }

    public function deconnexion(){

        auth()->logout();

        flash("Vous êtes bien déconnecté. A bientôt !")->success();

        return redirect('/');

    }
    
}
