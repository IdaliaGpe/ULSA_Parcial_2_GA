<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="style.css">

        <title>Cartelera</title>

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

      <div class="container ">
        <br>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
          @foreach($carteleras as $cartelera)
          <div class="col">
            @if($cartelera->foto)
            <a data-bs-toggle="modal" data-bs-target="#Modal{{$cartelera->id}}"><img style="width: 200px; height: 300px;" src="/storage/fotos/{{$cartelera->foto}}" class="card-img-top" alt=""></a>
            @endif
            <!-- Modal -->
            <div class="modal fade" id="Modal{{$cartelera->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$cartelera->nombre}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2 class="fw-bold mb-3  "></h2>
                        <img style="width: 450px; background-size:cover;" src="/storage/fotos/{{$cartelera->foto_2}}" class="card-img-top" alt="">
                        <br><br>
                        <h5 class="mb-3" style="color: black;">Director:{{$cartelera->director}}</h5>
                          <div class="row ">
                            <div class="col">
                              @foreach($generos as $genero)
                              @if($genero->id == $cartelera->id_genero)
                                <h5 class="mb-3" style="color: black;">Genero:{{$genero->nombre}}</h5>
                              @endif
                              @endforeach
                            </div>
                            <div class="col-md-4">
                              <h5 class="mb-3" style="color: black;">Año: {{$cartelera->año}}</h5>
                            </div>
                            <div class="col">
                              <h5 class="mb-3" style="color: black;">{{$cartelera->tiempo}} minutos</h5>
                            </div>
                          </div>
                            <div class="row ">
                            <div class="col">
                                <h5 class="form-label" for="typeEmailX">Hora: {{$cartelera->hora}}</h5>
                            </div>
                            <div class="col">
                            </div>
                            <div>
                                <h5 class="form-label" for="typeEmailX">Fecha:{{$cartelera->fecha}}</h5>
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn  float-end px-2" style="background-color: rgb(62, 62, 94); color: #ffffff;" type=""> <a href="{{route('carteleras.edit', $cartelera->id)}}">Editar</a></button>
                      <form action="{{route('carteleras.destroy', $cartelera->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn  float-end px-2" style="background-color: rgb(62, 62, 94); color: #ffffff;" type="submit">Desactivar</button>
                      </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </body>
</html>