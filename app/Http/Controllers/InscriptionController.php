<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {       

       
        request()->validate([
            'email' => ['required', 'email'],
            'nickname' => ['required', 'string','min:4'],
            'firstname' => ['string','nullable','min:3'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required'],
            'seller_confirmation'=>['nullable'],
            'businessName'=>['required_if:seller_confirmation,on','nullable'],
            'phone'=>['required_if:seller_confirmation,on','nullable'],
            'address'=>['required_if:seller_confirmation,on','nullable'],
            'product_category'=>['required_if:seller_confirmation,on'],
            'lat'=>['required_if:seller_confirmation,on','nullable','numeric', 'between:-90,90'],
            'long'=>['required_if:seller_confirmation,on','nullable','numeric', 'between:-180,180'],
            'teaserSeller'=>['required_if:seller_confirmation,on','nullable'],
            'avatar'=>['required_if:seller_confirmation,on','nullable', 'image'],
            'avatar1'=>['nullable', 'image'],
            'avatar2'=>['nullable', 'image'],
            'avatar3'=>['nullable', 'image'],
        ]);

        /*
        $user = User::create([
            'email' => request('email'),
            'nickname' => request('nickname'),
            'firstname' => request('firstname'),
            'password' => bcrypt(request('password')),
        ]);
        */


        return redirect('/');

        
    

        
        
    }
}
