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
            <a href="/connexion"><button class="btn">Connexion</button></a>
            <a href="/inscription"><button class="btn">Inscription</button></a>
        </div>
    </div>
</nav>
