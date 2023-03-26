<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style_actualizar.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <body style="background-color: rgb(68, 78, 105);">

    <nav class="navbar navbar-expand-lg " style="background-color: rgb(23, 28, 44);">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('peliculas.pelicula')}}" style="color: #ffffff;" >Cartelera</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('peliculas.historial')}}" style="color: #ffffff;">Historial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('peliculas.genero')}}" style="color: #ffffff;">Generos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('carteleras.create')}}" style="color: #ffffff;">Añadir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('peliculas.usuario')}}" style="color: #ffffff;">Usuarios</a>
          </li>
            </ul>
            <button type="button" class="btn btn-dark"><a href="/">Cerrar Sesión</a></button>
        </div>
      </div>
    </nav>


      <br>
      <br>
      <br><br><br>
    <div>
        <section class="">
            <div class="container">
              <div class="row ">
                  <div class="card text-white" style="border-radius: 1rem; background-color: rgb(23, 28, 44); width: 1500px; height: 600px;">
                    <br>
                    <div class="container text-center">
                        <div class="row">
                          <div class="col align-self-start">
                            <div class="row row-cols-1 row-cols-md-6 g-4" >
                              @foreach($usuarios as $usuario)
                                <div class="col">
                                    @if($usuario->foto)
                                    <a href="{{route('usuarios.edit', $usuario->id)}}"><img style="width: 100px; height: 100px;" src="/storage/fotos/{{$usuario->foto}}" class="card-img-top" alt=""></a>
                                    @endif
                                    <div class="card-body">
                                      <p class="card-text" style="color: rgb(255, 255, 255);">{{$usuario->nombre}}</p>
                                    </div>
                                </div>
                              @endforeach
                          </div>
                          <br><br><br><br><br><br><br><br><br><br><br>
                          <div class="col">
                            <div>
                                <button class="btn px-2" style="background-color: rgb(62, 62, 94); color: #ffffff;" type="submit"> <a href="{{route('usuarios.create')}}">Añadir</a></button>
                            </div>     
                          </div>
                        </div>
                      </div>

              </div>
            </div>
          </section>
      </div>
    </body>
</html>