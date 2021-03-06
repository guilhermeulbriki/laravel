<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\MatriculasController;

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

Route::resource('alunos', AlunosController::class);
Route::resource('cursos', CursosController::class);
Route::resource('disciplinas', DisciplinasController::class);
Route::resource('matriculas', MatriculasController::class);
