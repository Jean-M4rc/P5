<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/nouvelleInscription', function () {

    request()->validate([
        'email' => ['required', 'email'],
        'nickname' => ['required', 'string','min:4'],
        'firstname' => ['string'],
        'password' => ['required', 'min:8', 'confirmed'],
        'password_confirmation' => ['required'],

    ]);
    
    $user = App\User::create([
        'email' => request('email'),
        'nickname' => request('nickname'),
        'firstname' => request('firstname'),
        'password' => bcrypt(request('password')),
    ]);

    if ('seller_confirmation'=="1"){
        // Validation des champs de vendeurs et création du vendeur
        return "la case est cochée";
    } else {
        return "ce n'est pas un vendeur";
    }

});
