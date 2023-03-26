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
        $argumentos['usuarios'] = $usuarios;
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
        $usuario = Usuario::find($id);
        $argumentos['usuario'] = $usuario;

        return view('peliculas.editusuario', $argumentos);
    } 

    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $foto = $request->file('foto');
        if ($foto) {
            $usuario->foto = $foto->hashName();
            $foto->store('public/fotos');
        }
        $usuario->save();
        return redirect()->route('usuarios.edit', $id);
    }

    public function delete($id) {
        $usuario = Usuario::find($id);
        $argumentos['usuario'] = $usuario;
        return view('usuarios.delete', $argumentos);
    }

    public function destroy(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('peliculas.usuario');
    }
}
