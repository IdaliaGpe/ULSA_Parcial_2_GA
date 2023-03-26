<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
     //MOSTRAR USUARIOS
     public function index() {
        //nombre   Modelo
        $usuarios = Usuario::all();
        //           html reconoce este nombre
        $argumentos['usuario'] = $usuarios;
        //           nombre de blade
        return view('peliculas.usuario', $argumentos);
    }

    //CREAR USUARIO
    public function create() {
        $argumentos = array(); 
        return view('peliculas.nuevousuario', $argumentos);
    }

    public function store(Request $request) {
        $nuevoUsuarios = new Usuario();
        $nuevoUsuarios->nombre = $request->input('nombre');
        $foto = $request->file('foto');
            if ($foto) {
                $nuevoUsuarios->foto = $foto->hashName();
                $foto->store('public/fotos');  
            }
        $nuevoUsuarios->save();
        return redirect()->route('peliculas.usuario');
    }

    //EDITAR
    public function edit($id) {
        $usuarios = Usuario::find($id);
        $argumentos['usuario'] = $usuarios;

        return view('peliculas.usuario', $argumentos);
    } 

    public function update(Request $request, $id) {
        $usuarios = Usuario::find($id);
        $usuarios->nombre = $request->input('nombre');
        $foto = $request->file('foto');
        if ($foto) {
            $usuarios->foto = $foto->hashName();
            $foto->store('public/fotos');
        }
        $usuarios->save();
        return redirect()->route('usuarios.edit', $id);
    }
}
