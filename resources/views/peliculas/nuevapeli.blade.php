<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Añadir-Pelicula</title>
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

    <div>
        <section class="">
            <div class="container py-5">
              <form action="{{route('carteleras.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ">
                    <div class="card text-white" style="border-radius: 1rem; background-color: rgb(23, 28, 44); width: 1500px; ">
                      <div class="container">
                        <div class="row ">
                        
                        
                            <div class="col text-center p-5 gx-3">
                            
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br><br><br><br><br><br>
                              <label >Portada:</label>
                              <input type="file" name="foto">
                              <br><br>
                              <label >Segunda Portada:</label>
                              <input type="file" name="foto_2">
                              </div>
                          <div class="col p-5">
                            <br>
                            
                            <br>
                            <h2 class="fw-bold mb-3  text-uppercase text-center">Añadir Pelicula</h2>
                                <div class="form-outline form-white mb-4 mt-2">
                                  <label class="form-label" for="typeEmailX">Nombre</label>
                                  <input name="nombre" type="text" class="form-control form-control-lg" placeholder="Titulo" />
                                  <br>
                                  <label class="form-label" for="typeEmailX">Director</label>
                                  <input name="director" type="text" class="form-control form-control-lg" placeholder="Nombre Completo" />
                                </div>
                                <div class="container text-center">
                                  <div class="row align-items-start">
                                    <div class="col">
                                      <label class="form-label" for="typeEmailX">Género</label>
                                      <div class="dropdown-center">
                                        <select name="genero" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 160px; height: 48px;">
                                          <option value="" selected disabled>Elige un Genero</option>
                                          <ul class="dropdown-menu">
                                            @foreach($generos as $genero)
                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                            @endforeach
                                          </ul>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                      <label class="form-label" for="typeEmailX">Año</label>
                                      <input name="año" type="text" class="form-control form-control-lg" placeholder="Año"/>
                                    </div>
                                    <div class="col">
                                      <label class="form-label" for="typeEmailX">Duración</label>
                                      <input  name="tiempo" type="text" class="form-control form-control-lg" placeholder="Minutos"/>
                                    </div>
                                    <div class="col">
                                      <label class="form-label" for="typeEmailX">Hora</label>
                                      <input  name="hora" type="time" class="form-control form-control-lg"/>
                                    </div>
                                    <br>
                                    <div class="col">
                                      <label class="form-label" for="typeEmailX">Fecha</label>
                                      <input  name="fecha" type="date" class="form-control form-control-lg"/>
                                    </div>
                                  </div>
                                </div>
                                 <br>
                                <br>
                              <div>
                                  <button class="btn  px-2" style="background-color: rgb(107, 107, 151); color: #ffffff;" type=""><a href="{{route('peliculas.pelicula')}}">Cancelar</a></button>
                                  <button class="btn  float-end px-2" style="background-color: rgb(62, 62, 94); color: #ffffff;" type="submit">Guardar</button>
                              </div>                         

                              <br>
                              <br>
                              <br>

                              </div>

                        </div>
                    </div>

                </div>
               </form>
            </div>
          </section>
      </div>
    </body>
</html>