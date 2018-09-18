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

Route::get('/rootme', 'RootController@administration');

Route::post('/banUser', 'RootController@bannissement');

Route::get('/profil', 'CompteController@accueil');

Route::get('/deconnexion', 'CompteController@deconnexion');
