<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ env('APP_URL') }}">Iticourt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/about">A propos</a>
            </li>
        </ul>
        <div class="btngroup">
            <a href="/inscription"><button class="btn btn-primary">Inscription</button></a>
        
            <!-- bouton qui déclenche la modal de connexion -->
            <button class="btn btn-primary" data-toggle="modal" data-target='#logInModal'>Connexion</button>
        </div>
    </div>
</nav>

<!-- logInModal -->
<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="LogInModalCenter" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalCenterTitle">Connexion</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action='/connexion'>

                @csrf

                <fieldset>
                    <div class="modal-body">

                        <!-- Le mail -->
                        <div class="form-group">
                            <label for="email" class="control-label">Adresse mail : </label>
                            <input id="email" class="form-control" name="email" type="email" required />

                            @if ($errors->has('email'))
                                <p class="form-text text-danger"> {{ $errors->first('email') }}</p>
                            @endif

                        </div>                       

                        <!-- le mot de passe -->
                        <div class="form-group">
                            <label class="control-label">Mot de passe : </label>
                            <input id="mdp" class="form-control" name="password" type="password" required />

                            @if ($errors->has('password'))
                                <p class="form-text text-danger"> {{ $errors->first('password') }}</p>
                            @endif

                        </div>

                        <!-- cookiebox -->
                        <div class="alert alert-primary">
                            <h4 class="alert-heading">Attention</h4>
                            <div class="form-group">
                                <div class="form-check checkbox">
                                    <label class="from-check-label">
                                        <input type="checkbox" class="form-check-input" id="ca" value="1" name="CA">
                                    Se souvenir de moi.
                                    </label>
                                </div>
                                <p class="mb-0">Cocher l'option "Se souvenir de moi" permettra de mémoriser des cookies pour améliorer votre expérience. Si vous voulez supprimer ces cookies cliquez sur le bouton "Déconnexion".</p>	
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                        <input class="btn btn-primary" id="submit" type="submit" value="Connexion">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- End logInModal -->