<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pokemons 131</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (Route::currentRouteName() == 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Route::currentRouteName() == 'pokemon.index') ? 'active' : '' }}" href="{{ route("pokemon.index") }}">Pokemon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Route::currentRouteName() == 'environment.index') ? 'active' : '' }}" href="{{ route("environment.index") }}">Environments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Route::currentRouteName() == 'environment.deleted-index') ? 'active' : '' }}" href="{{ route("environment.deleted-index") }}">Deleted environments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
