<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenerosController;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Inicio
Route::get('/', function () {
    return view('peliculas.login');
});

//Cartelera
Route::get('/pelicula', [CarteleraController::class, 'index'])
->name('peliculas.pelicula');
Route::get('/pelicula/create', [CarteleraController::class, 'create'])
->name('carteleras.create');
Route::post('/carteleras', [CarteleraController::class, 'store'])
->name('carteleras.store');
Route::get('/carteleras/{id}/edit', [CarteleraController::class, 'edit'])
->name('carteleras.edit');
Route::put('/carteleras/{id}', [CarteleraController::class, 'update'])
->name(('carteleras.update'));
Route::get('/carteleras/{id}/delete', [CarteleraController::class, 'delete'])
->name('carteleras.delete');
Route::delete('/carteleras/{id}', [CarteleraController::class, 'destroy'])
->name('carteleras.destroy');

//Generos
Route::get('/genero', [GenerosController::class, 'index'])
->name('peliculas.genero');
Route::get('/genero/create', [GenerosController::class, 'create'])
->name('generos.create');
Route::post('/generos', [GenerosController::class, 'store'])
->name('generos.store');
Route::get('/genero/{id}/edit', [GenerosController::class, 'edit'])
->name('generos.edit');
Route::put('/generos/{id}', [GenerosController::class, 'update'])
->name(('generos.update'));

//Historial
Route::get('/historial', [HistorialController::class, 'index'])
->name('peliculas.historial');
Route::get('/historial/{id}/delete', [HistorialController::class, 'delete'])
->name('historial.delete');
Route::delete('/historial/{id}', [HistorialController::class, 'destroy'])
->name('historial.destroy');

//Usuarios
Route::get('/usuario', [UsuarioController::class, 'index'])
->name('peliculas.usuario');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])
->name('usuarios.create');
Route::post('/usuario', [UsuarioController::class, 'store'])
->name('usuarios.store');
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])
->name('usuarios.edit');
Route::put('/usuario/{id}', [UsuarioController::class, 'update'])
->name(('usuarios.update'));
Route::get('/usuario/{id}/delete', [UsuarioController::class, 'delete'])
->name('usuarios.delete');
Route::delete('/usuario/{id}', [UsuarioController::class, 'destroy'])
->name('usuarios.destroy');