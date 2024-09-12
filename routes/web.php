<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('Home');
});

###################### ROTAS DO CONTROLADOR ALUNO ######################
Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');

###################### ROTAS DO CONTROLADOR DISCIPLINA ######################
Route::get('/disciplinas', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/create', [DisciplinaController::class, 'create'])->name('disciplinas.create');
Route::post('/disciplinas', [DisciplinaController::class, 'store'])->name('disciplinas.store');
