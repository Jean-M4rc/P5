@forelse ($categories  as $category)

    @foreach ($category->category_seller as $seller)

        @if ($category->category_seller == "6")
        
            On est chez cat6 on un vendeur
            
        @endif

    @endforeach
    
@empty
    <h3 class="alert alert-warning text-center">Aucun vendeur enregistré dans cette catégorie</h3>
@endforelse