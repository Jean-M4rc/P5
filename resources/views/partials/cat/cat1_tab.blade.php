@forelse ($sellers->category_seller  as $seller)

   <h2>dedans</h2>
@empty
    <h3 class="alert alert-warning text-center">Aucun vendeur enregistré dans cette catégorie</h3>
@endforelse