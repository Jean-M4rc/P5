<table class="table table-hover">
        <thead>
          <tr class="table-info fixed text-center">
            <th class="align-middle" scope="col">Pseudo / Prénom</th>
            <th class="d-none d-sm-table-cell align-middle" scope="col">email</th>
            <th class=" d-none d-lg-table-cell align-middle" scope="col">Inscrit le</th>
            <th class=" d-none d-lg-table-cell align-middle" scope="col">Acheteur/Vendeur</th>
            <th class=" d-none d-lg-table-cell align-middle" scope="col">Banni</th>
            <th scope="col" class="align-middle">Actions</th>
          </tr>
        </thead>
        <tbody>
        
        @forelse ($utilisateurs as $utilisateur)

            <tr class="table-primary text-center align-middle">

                <td class="align-middle">{{ $utilisateur->nickname }}</td>
                <td class="align-middle d-none d-sm-table-cell">{{ $utilisateur->email }}</td>
                <td class="align-middle d-none d-lg-table-cell">{{ $utilisateur->created_at->format('d/m/Y à H:i:s') }}</td>
                <td class="align-middle d-none d-lg-table-cell">{{ $utilisateur->seller ? 'Vendeur' : 'Acheteur'}}</td>
                <td class="align-middle d-none d-lg-table-cell">{{ $utilisateur->ban==1 ? 'Oui' : 'Non' }}</td>
                <td class="align-middle"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInfoUser{{ $utilisateur->id }}">Actions</button></td>
                
                    
            </tr>

            <!-- modalInfoUser -->

            <div class="modal fade" id="modalInfoUser{{ $utilisateur->id }}" tabindex="-1" role="dialog" aria-labelledby="modalInfoUserCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">{{ $utilisateur->nickname }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-primary">Inscrit le {{ $utilisateur->created_at->format('d/m/Y à H:i:s') }}</p>
                        <p class="text-dark">Rôle : {{ $utilisateur->seller ? 'Vendeur' : 'Acheteur'}}</p>
                        <p class="text-primary">Nombre de commentaires postés : {{ count($utilisateur->comments) }}</p>
                        <div>
                            <p class="text-dark"> Image de profil :</p>
                            <img src="{{ $utilisateur->avatar_path }}"/>
                        </div>
                        @if ($utilisateur->seller)
                        <p>Lien vers la fiche du point de vente : <a href="#"></a></p>                            
                        @endif

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <form action="/banUser" method="post">
                        @csrf
                        <input type="hidden" name="userId" value="{{ $utilisateur->id }}">
                        <button type="submit" class="btn btn-dark">
                            @if ($utilisateur->ban === 0)
                                Bannir
                            @else
                                Débannir
                            @endif
                        </button>
                        </form>
                        
                    </div>
                    </div>
                </div>
            </div>



        @empty

        <tr class="table-dark">Aucun utilisateur enregistré</tr>
            
        @endforelse
         
          
        </tbody>
      </table> 