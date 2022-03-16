<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personas', function(){
    $personas = DB::table('personas')->get();
    //dd($personas);
    return view('personas.indexPersonas', compact('personas'));
});

Route::get('/personas/create', function(){
    return view('personas.formPersonas');
});

Route::post('/personas/store', function(){
    //Validación y limpieza
    //Guardar a DB
    //Redireccionar
});

Route::get('Hola-mundo', function(){
    return view('paginas/Hola-mundo');
});

Route::get('/videos/{nombre}/{aa?}', function($nombre, $aa = null){
    return view('paginas/videos', compact('nombre', 'aa'));
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
