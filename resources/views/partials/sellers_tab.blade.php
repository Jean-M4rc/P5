<table class="table table-hover">
    <thead>
        <tr class="table-info fixed text-center">
        <th class="align-middle" scope="col">Nom du vendeur</th>
        <th class="align-middle" scope="col">Nom du point de vente</th>
        <th class="d-none d-sm-table-cell align-middle" scope="col">Catégorie</th>
        <th class=" d-none d-lg-table-cell align-middle" scope="col">Adresse du lieu de vente</th>
        <th class=" d-none d-lg-table-cell align-middle" scope="col">Téléphone</th>
        <th class=" d-none d-lg-table-cell align-middle" scope="col">Coordonnées</th>
        <th class=" d-none d-lg-table-cell align-middle" scope="col">Voir sur la carte</th>
        <th class=" d-none d-lg-table-cell align-middle" scope="col">Voir les photos</th>
        <th scope="col" class="align-middle">Actions</th>
        </tr>
    </thead>

    <tbody>
        
        @forelse ($pdvs as $pdv)

            <tr class="table-primary text-center align-middle">

                <td class="align-middle">{{ $pdv->user->nickname }}</td>
                <td class="align-middle d-none d-sm-table-cell">{{ $pdv->business_name }}</td>
                <td class="align-middle d-none d-lg-table-cell">
                    @foreach ($pdv->seller_category as $seller_category)
                        {{ $seller_category->name }}
                    @endforeach
                </td>
                <td class="align-middle d-none d-lg-table-cell">{{ $pdv->address }}</td>
                <td class="align-middle d-none d-lg-table-cell">{{ $pdv->phone }}</td>
                <td class="align-middle d-none d-lg-table-cell"> Longitude :{{ $pdv->longitude }} , Latitude : {{ $pdv->latitude }}</td>
                <td class="align-middle"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMapSeller{{ $pdv->id }}">Carte</button></td>
                <td class="align-middle"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAvatarSeller{{ $pdv->id }}">Photos</button></td>
                <td class="align-middle"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInfoUser{{ $pdv->id }}">Actions</button></td>
                
                    
            </tr>

            <!-- modalMapSeller -->
            @include('partials.modals.modalMapSeller')

            <!-- modalAvatarUser -->
            @include('partials.modals.modalAvatarSeller')


            <!-- modalInfoUser -->
            <div class="modal fade" id="modalInfoUser{{ $pdv->id }}" tabindex="-1" role="dialog" aria-labelledby="modalInfoUserCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">{{ $pdv->business_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-primary">Inscrit le {{ $pdv->created_at->format('d/m/Y à H:i:s') }}</p>
                        <p class="text-dark">Catégories : {{ $pdv->category }}</p>
                        <p class="text-primary">Nombre de commentaires postés : {{ $pdv->rank }}</p>
                        <div>
                            <p class="text-dark"> Image de profil :</p>
                            <img src="{{ $pdv->avatar_path }}"/>
                        </div>
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <form action="/banUser" method="post">
                        @csrf
                        <input type="hidden" name="userId" value="{{ $pdv->id }}">
                        <button type="submit" class="btn btn-dark">Supprimer</button>
                        </form>
                        
                    </div>
                    </div>
                </div>
            </div>



        @empty

        <tr class="table-dark">Aucun point de vente enregistré</tr>
            
        @endforelse
         
          
    </tbody>
</table> 