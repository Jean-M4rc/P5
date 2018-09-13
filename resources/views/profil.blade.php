@extends('layout')

@section('contenu')

<div class="jumbotron">
    <h1>Bienvenue sur votre profil <strong>{{ auth()->user()->nickname }}</strong></h1>
    <p class="lead">Vous pouvez consulter vos informations ici et modifier votre compte.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/deconnexion" role="button">Me déconnecter</a>
    </p>
</div>
    
@endsection