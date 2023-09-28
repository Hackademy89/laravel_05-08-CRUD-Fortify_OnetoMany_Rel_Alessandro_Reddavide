<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Aggiungi l'icona SVG -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fa-solid fa-clapperboard fa-xl"></i>
            Home Movies
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row justify-content-end align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movie.index') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movie.create') }}">Create Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}}">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
