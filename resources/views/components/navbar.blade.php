<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('announcement.create')}}">Inserisci un annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('announcement.index')}}">Tutti gli annunci</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
                  
              @endforeach
            </ul>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Area utente
              </a>
              @auth
            <ul class="dropdown-menu">
              
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item btn" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                </li>
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              @else
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              @endauth
              
            </ul>
          </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>