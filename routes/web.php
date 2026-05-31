<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\MatriculaController;

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

Route::get('/estudantes', [EstudanteController::class, 'index'])
->name('estudantes.index');

Route::get('/estudantes/{id}', [EstudanteController::class, 'show'])
->name('estudantes.show');

Route::resource('alunos', AlunoController::class);

Route::resource('turmas', TurmaController::class);

Route::resource('professores', ProfessorController::class);

Route::resource('matriculas', MatriculaController::class);