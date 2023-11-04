<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorios', [DirectorioController:: class, 'index'])->name('directorio.index'); 

Route::get('/directorios/crear',[DirectorioController::class, 'create'])->name('directorio.crear');

Route::post('/directorios/store',[DirectorioController::class, 'store'])->name('directorio.store'); 

Route::get('/directorios/buscar',[DirectorioController::class, 'buscar'])->name('directorio.buscar');
Route::get('/directorios/delete',[DirectorioController::class, 'delete'])->name('directorio.delete');


Route::get('/contactos', [ContactoController:: class, 'index'])->name('contacto.index'); 

Route::get('/contactos/agregar',[ContactoController::class, 'agregar'])->name('contacto.agregar');
