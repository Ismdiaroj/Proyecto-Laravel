<?php

use App\Http\Controllers\GimnasioController;
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
    return view('Vistas.index');
});

Route::get('index', [GimnasioController::class,'index'])->name('index.index');
Route::get('horarios', [GimnasioController::class,'horario'])->name('horarios.horarios');
Route::get('blog', [GimnasioController::class,'blog'])->name('blog.blog');
Route::get('calculadora', [GimnasioController::class,'calculadora'])->name('calculadora.calculadora');
Route::post('calculadora',[GimnasioController::class,'store'])->name("calculadora.store");
Route::get('alta', [GimnasioController::class,'alta'])->name('alta.alta');

// Route::get()