<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body>
    <header>
      <div class="nav-top container-fluid">
        <div class="row bg-success align-items-center d-none d-lg-flex">
          <div class="col-3">
            <figure class="m-0">
              <img src="uploads/logo-nombre.png" alt="LOGO" class="img-fluid">
            </figure>
          </div>
          <div class="col">
            <form action="" method="post" >
              <input type="text" name="" id="" class="form-control" placeholder="Buscar">
              <button type="submit" class="d-none"></button>
            </form>
          </div>
          <div class="cuenta-carrito col-3 d-flex justify-content-center gap-5">
            <div>
              <a href="" class="nav-link">
                <img src="uploads/person.svg" alt="Mi cuenta" class="img-fluid">
                <span>Mi cuenta</span>
              </a>
            </div>
    
            <div>
              <a href="" class="nav-link">
                <img src="uploads/cart.svg" alt="Carrito" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    
      <nav class="navbar navbar-expand-lg text-center pb-3 pb-md-auto">
        <div class="container-fluid">      
          <a class="navbar-brand d-block d-lg-none" href="#">
            <img src="uploads/logo-nombre2.svg" alt="LOGO">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center gap-5" id="navbarNav">
            {{-- Nav items --}}
            <ul class="nav__options navbar-nav gap-2 gap-lg-4 justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Libros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Action</a></li>
                  <li><a class="dropdown-item" href="">Another action</a></li>
                  <li><a class="dropdown-item" href="">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Novedades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contacto</a>
              </li>
            </ul>
    
            <form action="" method="post" class="d-block d-lg-none mt-2">
              <input type="text" name="" id="" class="form-control" placeholder="Buscar">
              <button type="submit" class="d-none"></button>
            </form>
    
            <div class="cuenta-carrito d-flex justify-content-center gap-5 mt-3 d-block d-lg-none">
              <div>
                <a href="" class="nav-link">
                  <img src="uploads/person.svg" alt="Mi cuenta" class="img-fluid">
                  <span>Mi cuenta</span>
                </a>
              </div>
        
              <div>
                <a href="" class="nav-link">
                  <img src="uploads/cart.svg" alt="Carrito" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
</body>
</html>