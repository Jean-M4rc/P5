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

Route::view('/', 'home');

Route::view('/about','about');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscriptionVendeur', 'InscriptionController@traitementVendeur');

Route::post('/inscriptionAcheteur', 'InscriptionController@traitementAcheteur');

Route::post('/connexion', 'ConnexionController@traitement');

Route::get( '/sellersList' , 'SellerListController@sellersList');

Route::get('/pointdevente{id}', 'SellerListController@sellerFile');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'

    ], function () {

    Route::get('/rootme', 'RootController@administration');

    Route::post('/banUser', 'RootController@bannissement');

    Route::post('/resetSellerAvatar', 'RootController@resetAvatar');

    Route::post('/deleteSeller', 'RootController@deleteSeller');

    Route::get('/profil', 'CompteController@accueil');

    Route::post('/updateUser', 'UpdateController@updateUser');

    Route::post('/updateSeller', 'UpdateController@updateSeller');

    Route::get('/deconnexion', 'CompteController@deconnexion'); 

});



