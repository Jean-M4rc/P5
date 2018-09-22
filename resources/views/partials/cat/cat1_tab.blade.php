@forelse ($categories  as $category)

    @foreach ($category->category_seller as $seller)

        @if ($category->category_seller == "1")
        
            On est chez les légumes on un vendeur
            
        @else
            <h3 class="alert alert-warning text-center">Aucun vendeur enregistré dans cette catégorie</h3>
        @endif

    @endforeach
    
@empty
    <h3 class="alert alert-warning text-center">Aucun vendeur enregistré dans cette catégorie</h3>
@endforelse