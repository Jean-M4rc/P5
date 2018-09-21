@extends('layout')

@section('contenu')

    @forelse ($vendeurs as $vendeur)
        <p>{{$vendeur->business_name}}</p>
    @empty
        
    @endforelse
    
@endsection