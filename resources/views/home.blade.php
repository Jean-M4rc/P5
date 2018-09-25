@extends('layout')

@section('contenu')
    
    <h1 class="display-6 text-center mt-2">Iticourt</h1>
    <p class="lead text-center container">L'itinéraire des circuits courts</h2>
    <hr>

    <div class="row d-none d-md-block mt-5"><!-- partie display:none en vue smartphone -->
        <p class="lead text-center flex-center" style="height:150px">Que voulez-vous faire ?</p>        
    </div>

    <div class="row"><!-- partie à gérer en vuejs pour animer la succession de bouton -->

            <div class="col-12 col-md-6 flex-column flex-center" style="height:160px">
                <a id="buybtn1" href="">
                    <i class="fas fa-shopping-basket fa-4x flex-center"></i>
                    <p class="lead text-center">Vous achetez !</p>
                </a>
            </div>
            
            <div id="sellbtn1" class="col-12 col-md-6 flex-column flex-center " style="height:160px">
                    <a class="links" href="#logInModal" data-toggle="modal" data-target="#logInModal" >
                        <i class="fas fa-home fa-4x flex-center"></i>
                        <p class="lead ">Vous vendez !</p>
                    </a>
            </div>
             
    </div>

    <div  id="mapid">

    </div>

@endsection