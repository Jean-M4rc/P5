
{{ dd($sellers_cat1) }}

@forelse ($sellers_cat1->bussines_name  as $seller)

   <h2>{{$seller}}</h2>

@empty

    <h3 class="alert alert-warning text-center">Aucun vendeur enregistré dans cette catégorie</h3>

@endforelse