<nav class="navbar nav navbar-expand-lg bg-transparent navbar-dark fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}"><img class="logo" src="/media/navbar.png" alt="logo"></a>
      <button class="navbar-toggler background-primaryC" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mx-2 @if(Route::is('homepage')) activeNav @else btn-link @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 @if(Route::is('announcement.create')) activeNav @else btn-link @endif" href="{{route('announcement.create')}}">Inserisci un annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 @if(Route::is('announcement.index')) activeNav @else btn-link @endif" href="{{route('announcement.index')}}">Tutti gli annunci</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mx-2 @if(Route::is('categoryShow')) activeNav @else btn-link @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu dropdaun">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
                  
              @endforeach
            </ul>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-link mx-2 @if(Route::is('login')) activeNav @elseif(Route::is('register')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Area utente
              </a>
              @auth
            <ul class="dropdown-menu dropdaun">
              
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                </li>
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              @else
              <ul class="dropdown-menu dropdaun">
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