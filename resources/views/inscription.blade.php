@extends('layout')

@section('contenu')

    <form action="nouvelleInscription.php" method="post" class="container mb-5">
        <fieldset><!-- Formulaire utilisateur commun -->
            <legend class="mt-2">Inscription à Iticourt</legend>            
            <div class="form-group"><!-- mail -->
                <label>Adresse mail</label>
                <input class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" type="email">
                <small id="emailHelp" class="form-text text-muted">Nous ne transmettrons jamais votre email à un tiers.</small>
            </div>
            <div class="form-group"><!-- prénom -->
                <label>Prénom</label>
                <input class="form-control" name="nickname" placeholder="Prénom" type="text">
            </div>
            <div class="form-group"><!-- nom -->
                <label>Nom</label>
                <input class="form-control" name="firstname" placeholder="Nom" type="text">
            </div>
            <div class="form-group"><!-- passwd -->
                <label for="InputPassword1">Mot de passe</label>
                <input class="form-control" id="InputPassword1" name="password" placeholder="Mot de passe" type="password">
            </div>
            <div class="form-group"><!-- passwd_confirmation -->
                <label for="InputPassword2">Confirmer votre mot de passe</label>
                <input class="form-control" id="InputPassword2" name="password_confirmation" placeholder="Mot de passe" type="password">
            </div>
            <button type="submit" class="btn btn-primary">M'inscrire</button>            
        </fieldset>
        <hr>
        <fieldset><!-- Complément formulaire pour les vendeurs -->
            <p><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sellercollapse" aria-expanded="false" aria-controls="collapseExample">Vendeur ?</button></p>
            
            <div class="collapse container" id="sellercollapse">
                <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>N'oubliez pas de remplir les informations précédentes.</strong>
                </div>
                <legend>Vendeur</legend>
                <div class="form-group"><!-- checkbox de confirmation de vente -->
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="seller_confirmation" type="checkbox" name="seller_confirmation">
                        <label class="custom-control-label" for="seller_confirmation">Je déclare être un vendeur</label>
                    </div>
                </div>
                <div class="form-group"><!-- Nom de la structure -->
                    <label class="col-form-label" for="inputBusinessName">Le nom de votre structure</label>
                    <input class="form-control" placeholder="Les volailles de Roseline..." id="inputBusinessName" type="text" name="businessName">
                </div>
                <div class="form-group"><!-- Téléphone -->
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Téléphone :</span>
                        </div>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group"><!-- Adresse -->
                    <label>Adresse :</label>
                    <textarea class="form-control" id="address" rows="3"></textarea>
                </div>
                <div class="form-group row"><!-- Sélection des catégories -->
                    <label aria-describedby="categoriesHelp" class="col-12">Vos produits<small id="categoriesHelp" class="form-text text-muted">Vous pouvez sélectionner plusieurs catégories.</small></label>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category1" type="checkbox" name="product_category1">
                        <label class="custom-control-label" for="product_category1">Fruits & Légumes</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category2" type="checkbox" name="product_category2">
                        <label class="custom-control-label" for="product_category2">Volailles</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category3" type="checkbox" name="product_category3">
                        <label class="custom-control-label" for="product_category3">Oeufs</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category4" type="checkbox" name="product_category4">
                        <label class="custom-control-label" for="product_category4">Laits & Fromages</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category5" type="checkbox" name="product_category5">
                        <label class="custom-control-label" for="product_category5">Charcuterie</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category6" type="checkbox" name="product_category6">
                        <label class="custom-control-label" for="product_category6">Boucherie</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category7" type="checkbox" name="product_category7">
                        <label class="custom-control-label" for="product_category7">Textiles</label>
                    </div>
                    <div class="custom-control custom-checkbox col-12 col-sm-6 col-md-3">
                        <input class="custom-control-input" id="product_category8" type="checkbox" name="product_category8">
                        <label class="custom-control-label" for="product_category8">Autres</label>
                    </div>
                </div>
                <div class="form-group row"><!-- Récupération de la position GPS du point de vente -->
                    <label aria-describedby="gpsHelp" class="col-12">Vos coordonnées GPS<small id="gpsHelp" class="form-text text-muted">Indiquez les coordonnées GPS de votre point de vente, ou de l'entrée de votre propriété sur la voie publique</small></label>
                    <div class="form-group container">
                        <input class="form-control mb-1" id="longInput" name="long" placeholder="Longitude ex : 49.3154287" type="text">
                        <input class="form-control mb-1" id="latInput" name="lat" placeholder="Latitude ex : -0.875458754" type="text">
                        <button type="button" class="btn btn-primary container">Récupérer automatiquement<br/> ses coordonnées</button>  
                    </div>
                </div>
                <div class="form-group"><!-- Présentation de la structure -->
                    <label>Présentation de votre production<small class="form-text text-muted">Décrivez briévement les produits que vous souhaitez vendre.</small></label>
                    <textarea class="form-control" id="teaserSeeler" rows="3"></textarea>
                </div>
                <div class="form-group"><!-- Photos -->
                    <label>Ajoutez quelques photos pour présenter votre structure et vos produits.</label>
                    <div  class="custom-file">
                        <input class="custom-file-input" id="InputFile1" type="file" aria-describedby="fileHelp" name="avatar">
                        <label class="custom-file-label" for="InputFile1">Photo principale :</label>
                        <small id="fileHelp" class="form-text text-muted">Ajouter une photo qui réprésente votre structure ou l'entrée de votre point de vente pour aider vos visiteurs.</small>
                    </div>
                    <div  class="custom-file mt-2 mb-1">
                        <input class="custom-file-input" id="InputFile2" type="file" aria-describedby="fileHelp" name="avatar1">
                        <label class="custom-file-label" for="InputFile2">Photo alternative 1 :</label>
                    </div>
                    <div class="custom-file mb-1">
                        <input class="custom-file-input" id="InputFile3" type="file" aria-describedby="fileHelp" name="avatar2">
                        <label class="custom-file-label" for="InputFile3">Photo alternative 2 :</label>
                    </div>
                    <div class="custom-file">
                        <input class="custom-file-input" id="InputFile4" type="file" aria-describedby="fileHelp" name="avatar3">
                        <label class="custom-file-label" for="InputFile4">Photo alternative 3 :</label>
                    </div>
                    <small id="fileHelp" class="form-text text-muted">Ajouter des photos de vos produits.</small>
                </div>
                <button type="submit" class="btn btn-primary">M'inscrire</button>
            </div>
        </fieldset>
    </form>

@endsection