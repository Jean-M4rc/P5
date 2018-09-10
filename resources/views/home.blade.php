@extends('layout')

@section('contenu')
    
    <h1 class="display-6 text-center mt-2">Iticourt</h1>
    <p class="lead text-center container">L'itinéraire des circuits courts !</h2>

    <div class="flex-center row">

            <div id="buybtn1" class="flex-column flex-center col-12 col-sm-6" style="height:180px">
                <i class="fas fa-shopping-basket fa-4x "></i>
                <p class="lead text-center">Vous achetez !</p>
            </div>
              
            <a href="/connexion">
            <div id="sellbtn1" class="flex-column flex-center col-12 col-sm-6" style="height:180px">
                    <i class="fas fa-home fa-4x"></i>
                    <p class="lead text-center">Vous vendez !</p>
            </div>
            </a>
            
             
    </div>

@endsection