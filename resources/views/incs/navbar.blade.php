<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('articles') }}">Article </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        @if (Auth::user())
          @if (Auth::user()->role === 'ADMIN')
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('articles.index') }}">Espace admin</a>
            </li>
          @endif

          <li class="nav-item active">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn">Deconnexion</button>
            </form>
            </li>
        @else
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
            </li>
        @endif
        
      </ul>
    </div>
  </nav>