<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{

    /**
     * Traitement du formulaire de connexion
     *
     * @return void
     */
    public function traitement()
    {
        request()->validate([
            'email'=> ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        // TODO Gérer la mise en place de token RememberMe
        
        $remember = request('remember');

        if(!isset($remember)){

            $remember = false;

        }

        // Méthode non fonctionnelle, le cookie est toujours actif        
        $resultat = auth()->attempt([
            'email'=> request('email'),
            'password' => request('password'),
            'ban' => 0,
        ], $remember);
        
        if($resultat){

            flash("Vous êtes bien connecté.")->success();

            return redirect('/');
        
        } else {

            flash()->overlay('Echec de la connexion !', 'Attention')->error();

            return redirect('/');
        }
        
        /*
            // Issue de la doc mais non fonctionnelle non plus

            if (Auth::attempt([

                'email'=> request('email'),
                'password' => request('password'),
                'ban' => 0,
                
            ], $remember)) {

                // Ici connecté avec le cookie

                flash("Vous êtes bien connecté. Le cookie est défini")->success();

                return redirect('/'); 

            } else {

                // Ici connecté sans cookie . pas connecté ?

                flash()->overlay('Echec de la connexion !', 'Attention')->error();

                return redirect('/');
            };
        */

    }
}
