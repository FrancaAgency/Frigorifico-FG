<div class="navbar2">
  <div class="row">
    <div class="col-md-3  p-3">
        <a href="{{ route('index')}}"><img src="{{asset('images/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top logo"></a>
    </div>
    <div class="col-md-3  p-3">
      <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-person"></i>portal clientes
      </button>
    </div>
    <div class="col-md-3  p-3">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
      </form>
    </div>
    <div class="col-md-3  p-3">
      <img src="{{asset('images/leng.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top leng"></div>
  </div>
</div>
<!--Inicia el segundo  navBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white justify-content-center">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0 text-white centrar">
        <li class="nav-item dropdown  text-white padding">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            nosotros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">nuestra historia</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">sostenibilidad</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">linea etica</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown  text-white padding">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios fg
          </a>
          <ul class="dropdown-menu" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <a class="dropdown-item dropdown-toggle" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">bovinos</a>
              <li><a class="dropdown-item " href="#">SACRIFICIO BOVINO</a></li>
          </ul>
        </li>
        <li class="nav-item text-white padding">
          <a class="nav-link" href="#">
            precios
          </a>
        </li>
        <li class="nav-item dropdown  text-white padding">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           maestros fg
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Maestros Porcicultores</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Maestros Ganaderos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Maestros de la carne</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown  text-white padding">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            blog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">actualidad</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">ventajas de la carne</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">cortes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown  text-white padding">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            contacto
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">contáctenos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">trabaje con nosotros</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">vincúlESE como cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">pqr</a></li>
          </ul>
        </li>
      </ul>
      {{-- <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none  text-white">
              @csrf
            </form>
        </li>
        <li class="nav-item dropdown  text-white">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CRUD
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul> --}}
    </div>
  </div>
</nav>