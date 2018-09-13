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

        $resultat =auth()->attempt([
            'email'=> request('email'),
            'password' => request('password'),
        ]);

        if($resultat){

            return redirect('/profil');
        
        } else {

            flash()->overlay('Vos identifiants sont incorrects !', 'Attention')->error();

            return redirect('/');
        }

    }
}
