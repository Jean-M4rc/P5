<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{

    /**
     * Vérifier si un champ et rempli et s'il l'est vérifier les données et mettre à jour
     * Le prénom/pseudo
     * Le nom
     * L'email (unique)
     * Le mot de passe
     * La photo
     *
     * @return void
     */
    public function updateUser()
    {
        // Le pseudo
        if (request('nickname')){

            request()->validate([
                'nickname' => ['string','min:4'],
            ]);

            auth()->user()->update([
                'nickname'=>request('nickname'),
            ]);

            flash('Vos informations ont été mise à jour');
        }
        
        // Le nom
        if (request('firstname')){

            request()->validate([
                'firstname' => ['string','min:4'],
            ]);

            auth()->user()->update([
                'firstname'=>request('firstname'),
            ]);

            flash('Vos informations ont été mise à jour');
        }

        // l'email
        if (request('email')){

            request()->validate([
                'email' => ['email','unique:users,email'],
            ]);

            auth()->user()->update([
                'email'=>request('email'),
            ]);

            flash('Vos informations ont été mise à jour');
        }

        // le nouveau mot de passe
        if (request('newPassword')){

            request()->validate([
                'newPassword' => ['confirmed','min:6'],
                'newPassword_confirmation' => ['required'],
            ]);

            auth()->user()->update([
                'password'=>bcrypt(request('newPassword')),
            ]);

            flash('Vos informations ont été mise à jour');
        }

        // la photo de profil
        if (request('avatarProfil')){

            request()->validate([
                'avatarProfil' => ['image'],
            ]);

            $path = request('avatarProfil')->store('usersAvatar','public');

            auth()->user()->update([
                'avatar_path' =>$path,
            ]);

            flash('Vos informations ont été mise à jour');
        }


        return back();
    }
}
