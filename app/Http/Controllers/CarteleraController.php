<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartelera;
use App\Models\Genero;

class CarteleraController extends Controller
{
    //MOSTRAR PELICULAS
    public function index() {
        //nombre   Modelo
        $carteleras = Cartelera::all();
        //           html reconoce este nombre
        $argumentos['carteleras'] = $carteleras;
        //           nombre de blade
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view('peliculas.pelicula', $argumentos);
    }

    //CREAR PELICULAS
    public function create() {
        $argumentos = array(); 
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view('peliculas.nuevapeli', $argumentos);
    }

    public function store(Request $request) {
        $nuevaPelicula = new Cartelera();
        $nuevaPelicula->nombre = $request->input('nombre');
        $nuevaPelicula->director = $request->input('director');
        $nuevaPelicula->año = $request->input('año');
        $nuevaPelicula->tiempo = $request->input('tiempo');
        $nuevaPelicula->hora = $request->input('hora');
        $nuevaPelicula->fecha = $request->input('fecha');

        $nuevaPelicula->id_genero = $request->input('genero');

        $foto = $request->file('foto');
            if ($foto) {
                $nuevaPelicula->foto = $foto->hashName();
                $foto->store('public/fotos');  
            }

        $foto_2 = $request->file('foto_2');
        if ($foto_2) {
            $nuevaPelicula->foto_2 = $foto_2->hashName();
            $foto_2->store('public/fotos');  
        }
        $nuevaPelicula->save();
        return redirect()->route('peliculas.pelicula');
    }

    //EDITAR
    public function edit($id) {
        $carteleras = Cartelera::find($id);
        $argumentos['cartelera'] = $carteleras;
        $generos = Genero::all();
        $argumentos['generos'] = $generos;

        return view('peliculas.editpeli', $argumentos);
    } 

    public function update(Request $request, $id) {
        $carteleras = Cartelera::find($id);
        $carteleras->nombre = $request->input('nombre');
        $carteleras->director = $request->input('director');
        $carteleras->año = $request->input('año');
        $carteleras->tiempo = $request->input('tiempo');
        $carteleras->hora = $request->input('hora');
        $carteleras->fecha = $request->input('fecha');

        $carteleras->id_genero = $request->input('genero');

        $foto = $request->file('foto');
            if ($foto) {
                $carteleras->foto = $foto->hashName();
                $foto->store('public/fotos');  
            }
        $foto_2 = $request->file('foto_2');
        if ($foto_2) {
            $carteleras->foto_2 = $foto_2->hashName();
            $foto_2->store('public/fotos');  
        }
        $carteleras->save();
        return redirect()->route('carteleras.edit', $id);
    }

    public function delete($id) {
        $carteleras = Cartelera::find($id);
        $argumentos['cartelera'] = $carteleras;
        return view('carteleras.delete', $argumentos);
    }

    public function destroy(Request $request, $id) {
        $carteleras = Cartelera::find($id);
        $carteleras->delete();
        return redirect()->route('peliculas.pelicula');
    }
}
