<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Añadir-Genero</title>
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
      <br>
      <br>

    <div>
        <section class="">
            <div class="container py-5">
              <div class="row ">
                  <div class="card text-white" style="border-radius: 1rem; background-color: rgb(23, 28, 44); width: 1500px; height: 600px; ">
                    <div class="container">
                        <form action="{{route('generos.update', $generos->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row ">
                                    <div class="col text-center">
                                        <br>
                                        <br>
                                        
                                        @if($generos->foto)
                                        <img style="width: 500px; height: 400px" src="/storage/fotos/{{$generos->foto}}" class="card-img-top" alt="">
                                        @endif
                                        <br>
                                        <br>
                                        <label >Portada:</label>
                                        <input type="file" name="foto">
                                    </div>
                                    <div class="col p-5">
                                        <br>
                                        <br>
                                        <br>
                                        <h2 class="fw-bold mb-3  text-uppercase text-center">Editar Genero</h2>
                                        <br>
                
                                        <div class="form-outline form-white mb-4 mt-2">
                                        <label class="form-label" >Genero</label>
                                        <input value="{{$generos->nombre}}" name="nombre" type="text" class="form-control form-control-lg" placeholder="Insertar nombre..."/>
                                        </div>
                                        
                                        <div>
                                            <button class="btn  px-2" style="background-color: rgb(107, 107, 151); color: #ffffff;" type=""> <a href="{{route('peliculas.genero')}}">Cancelar</a></button>
                                            <button class="btn  float-end px-2" style="background-color: rgb(62, 62, 94); color: #ffffff;" type="submit">Guardar</button>
                                        </div>                         
                                
                                <br>
                                <br>
                                <br>

                            </div>
                        </form>
                      </div>
                  </div>

              </div>
            </div>
          </section>
      </div>
    </body>
</html>