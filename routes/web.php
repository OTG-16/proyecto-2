<?php

use App\Http\Controllers\PersonaController;
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

Route::resource('/persona', PersonaController::class);

Route::get('Hola-mundo', function(){
    return view('paginas/Hola-mundo');
});

Route::get('/videos/{nombre}/{aa?}', function($nombre, $aa = null){
    return view('paginas/videos', compact('nombre', 'aa'));
});

Route::get('bienvenida', function () {
    return view('bienvenida');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
