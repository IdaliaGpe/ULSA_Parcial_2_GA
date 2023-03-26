<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historial;
use App\Models\Genero;

class HistorialController extends Controller
{
    public function index() {
        $historial = Historial::all();
        $argumentos['historial'] = $historial;
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view('peliculas.historial', $argumentos);
    }

    public function delete($id) {
        $historial = Historial::find($id);
        $argumentos['historial'] = $carteleras;
        return view('historial.delete', $argumentos);
    }

    public function destroy(Request $request, $id) {
        $historial = Historial::find($id);
        $historial->delete();
        return redirect()->route('peliculas.historial');
    }
}
