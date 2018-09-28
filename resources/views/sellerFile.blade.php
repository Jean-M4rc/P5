@extends('layout')

@section('contenu')

<div class="jumbotron text-center">

    <h1>{{ $seller->business_name }}</h1>
    <p class="lead">Vous pouvez consulter mes informations ici et commenter mes produits.</p>
    <hr class="my-4">
    <p>Me contacter  : {{$seller->phone}}</p>
    <p>Mes categories de produits  : 
        @foreach ($seller->categories as $category)
            {{$category->name}} 
        @endforeach
    </p>
    <p>Mon adresse : {{$seller->address}}</p>
    <div class="row">
        <p class="col-12 text-center">Les photos de mes produits :</p>
        
        <div class="row">

            @if(!$seller->avatar2_path && !$seller->avatar3_path)

                <img class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2" src="/storage/{{ $seller->avatar1_path }}" alt="Première photo de produit"/>

            @elseif(!$seller->avatar2_path)

                <img class="col-12 col-md-6 col-lg-5 offset-lg-1 mb-2"  src="/storage/{{ $seller->avatar1_path }}" alt="Première photo de produit"/>
                <img class="col-12 col-md-6 col-lg-5" src="/storage/{{ $seller->avatar3_path }}" alt="Troisième photo de produit"/>

           
            @elseif(!$seller->avatar3_path)

                <img class="col-12 col-md-6 col-lg-5 offset-lg-1 mb-2"  src="/storage/{{ $seller->avatar1_path }}" alt="Première photo de produit"/>
                <img class="col-12 col-md-6 col-lg-5" src="/storage/{{ $seller->avatar2_path }}" alt="Deuxième photo de produit"/>

            @else
                <img class="col-12 col-md-4 mb-2" src="/storage/{{ $seller->avatar1_path }}" alt="Première photo de produit"/>
                <img class="col-12 col-md-4 mb-2" src="/storage/{{ $seller->avatar2_path }}" alt="Deuxième photo de produit"/>
                <img class="col-12 col-md-4" src="/storage/{{ $seller->avatar3_path }}" alt="Troisième photo de produit"/>
            @endif
                

        </div>
    </div>
</div>

<!-- ici inclure la vue des commentaires - on appelle le composant Vuejs -->
<comment-form></comment-form>
@endsection