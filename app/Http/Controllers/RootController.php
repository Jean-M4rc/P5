<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Comment;
use App\Seller;

class RootController extends Controller
{

    /**
     * Accède au portail d'administration
     *
     * @return void
     */
    public function administration()
    {

        return view('root', [
            'utilisateurs' => User::where('admin','0')->get()->load('seller'),
            'pdvs' => Seller::with('seller_category')->get()->load('user'),
            'commentaires' => Comment::with('seller')->get()->load('user'),
        ]);
    }

    /**
     * Banni un utilisateur
     *
     * @return void
     */
    public function bannissement()
    {
        request()->validate([
            'userId' => ['required'],
        ]);

        $userId = request('userId');

        $utilisateuràbannir = User::where('id',$userId)->first();


        if($utilisateuràbannir->ban === 1){

            $utilisateuràbannir->update([
                'ban' => 0,
            ]);

        } else {

            $utilisateuràbannir->update([
            'ban' => 1,
            ]);

        }
        
        return back();

    }

    /**
     * Réinitialise l'avatar du point de vente
     * En fonction des photos sélectionnées
     *
     * @return void
     */
    public function resetAvatar()
    {
        request()->validate([
            'userId' => ['required'],
            'avatarSellers' => ['required']
        ]);
        
        $sellerId = request('userId');

        //On a validé l'envoi des données, on a au moins un choix et l'id

        $sellerModerate = Seller::where('id', $sellerId);

        $avatarSellers = request('avatarSellers');

            foreach ($avatarSellers as $key => $avatarSeller) {

                $sellerModerate->update([

                    'avatar'. $avatarSeller .'_path' => 'sellersAvatar/avatarSellerDefault.jpg',
                    
                ]);
            }

        flash('Les photos sont modérées')->success();

        return back();
    }

    public function deleteSeller()
    {
        request()->validate([
            'seller_id' => ['required'],
        ]);

        // TODO refaire table avec clé étrangère pour les relations en cascades
        
        $seller = Seller::where('id', request('seller_id'))->get();

        dd($seller->user_id->get());

        dd($userSeller= Seller::with('user')->get()->where('user_id', seller()->id ));

        //$seller->delete();

        return back();
    }
}
