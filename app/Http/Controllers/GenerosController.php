<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //MOSTRAR GENEROS
    public function index() {
        //nombre   Modelo
        $generos = Genero::all();
        //           html reconoce este nombre
        $argumentos['generos'] = $generos;
        //           nombre de blade
        return view('peliculas.genero', $argumentos);
    }

    //CREAR GENEROS
    public function create() {
        $argumentos = array(); 
        return view('peliculas.nuevogen', $argumentos);
    }

    public function store(Request $request) {
        $nuevoGenero = new Genero();
        $nuevoGenero->nombre = $request->input('nombre');
        $foto = $request->file('foto');
            if ($foto) {
                $nuevoGenero->foto = $foto->hashName();
                $foto->store('public/fotos');  
            }
        $nuevoGenero->save();
        return redirect()->route('peliculas.genero');
    }

    //EDITAR
    public function edit($id) {
        $generos = Genero::find($id);
        $argumentos['generos'] = $generos;

        return view('peliculas.editgen', $argumentos);
    } 

    public function update(Request $request, $id) {
        $genero = Genero::find($id);
        $genero->nombre = $request->input('nombre');
        $foto = $request->file('foto');
        if ($foto) {
            $genero->foto = $foto->hashName();
            $foto->store('public/fotos');
        }
        $genero->save();
        return redirect()->route('generos.edit', $id);
    }
}
