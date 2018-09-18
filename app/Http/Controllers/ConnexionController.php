<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{

    public function traitement()
    {
        request()->validate([
            'email'=> ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        /*
         request('remember') est la case à cochée "Se souvenir de moi"
         $remember = request('remember');

         if($remember == null){
            $remember = false;
         }
        */


        $resultat = auth()->attempt([
            'email'=> request('email'),
            'password' => request('password'),
        ]);

        if($resultat){

            flash("Vous êtes bien connecté.")->success();

            return redirect('/');
        
        } else {

            flash()->overlay('Vos identifiants sont incorrects !', 'Attention')->error();

            return redirect('/');
        }

    }
}
