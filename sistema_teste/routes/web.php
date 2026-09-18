<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Aluno;


Route::get('/alunos', function (){
    $alunos = Aluno::all();

    return $alunos;
});


Route::get('/excluir-aluno', function () {
    $aluno = Aluno::find(1);

    $aluno->delete();

    return 'Aluno excluido';
});

