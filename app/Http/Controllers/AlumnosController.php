<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Pelicula;

class AlumnosController extends Controller
{
    public function index() {
        $alumnos = Alumno::all();
        
        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;

        return view('alumnos.index', $argumentos);
    }

    //Peliculas
    public function login() {
        $login = Login::all();
        
        $argumentos = array();
        $argumentos['login'] = $login;

        return view('peliculas.login', $argumentos);
    }

    public function historial() {
        $peliculas = Pelicula::all();
        
        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return view('peliculas.historial', $argumentos);
    }

    public function nuevapeli() {
        $peliculas = Pelicula::all();
        
        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return view('peliculas.nuevapeli', $argumentos);
    }






    //
    //
    //
    //
    public function create() {
        $argumentos = array();
        $carreras = Carrera::all();
        $argumentos['carreras'] = $carreras;
        
        return view('alumnos.create', $argumentos);
    }

    public function store(Request $request) {
        $nuevoAlumno = new Alumno();
        //Las columanas de la tabla asociada
        //Se representan mediante propiedades del objeto
        //Objeto
        $nuevoAlumno->nombre = $request->input('nombre');
        $nuevoAlumno->id_carrera = $request->input('carrera');
        $foto = $request->file('foto');
            if ($foto) {
                $nuevoAlumno->foto = $foto->hashName();
                $foto->store('public/fotos');
                
            }
        $nuevoAlumno->save();
        //Hacer que nos regrese a index
        return redirect()->route('alumnos.index')
        ->with('exito', 'Alumno creado exitosamente');
    }

    //Estamos recibiendo paramentros de ruta a traves de
    //parametros de funcion
   public function edit($id) {
        $alumno = Alumno::find($id);
        $carreras = Carrera::all();
        $argumentos['carreras'] = $carreras;
        $argumentos = array();
        $argumentos['alumno'] = $alumno;
        $argumentos['carreras'] = $carreras;

        return view('alumnos.edit', $argumentos);
    } 

    public function update(Request $request, $id) {
        //Busca al Alumno
        $alumno = Alumno::find($id);
        //Actualiza sus datos en base a los valores del form
        $alumno->nombre = $request->input('nombre');
        $alumno->id_carrera = $request->input('carreras');
        $foto = $request->file('foto');
        if ($foto) {
            $alumno->foto = $foto->hashName();
            $foto->store('public/fotos');
            
        }
        $alumno->save();

        return redirect()->route('alumnos.edit', $id)
        ->with('exito', 'El alumno se ha actualizado exitosamente');
    }

    public function delete($id) {
        $alumno = Alumno::find($id);
        $argumentos['alumno'] = $alumno;

        return view('alumnos.delete', $argumentos);
    }

    public function destroy(Request $request, $id) {
        $alumno = Alumno::find($id);
        $feedback = "Se elimino correctamente a: ". $alumno->nombre;
        $alumno->delete();

        return redirect()->route('alumnos.index')
        ->with('exito', $feedback);
    }

}