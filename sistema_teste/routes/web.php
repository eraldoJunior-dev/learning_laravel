<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', function () {
    return 'Lista de alunos';
});

Route::get('/professores', function () {
    return 'Lista de professores';
});

Route::get('/alunos/{id}/{nome}', function ($id, $nome) {
    return 'Aluno: ' . $id . '<br>Nome: ' . $nome;
});

Route::get('/professores/{nome}', function ($nome) {
    return 'Professor: ' . $nome;
});

Route::get('/produtos/{id}/{nome}/{preco}', function ($id, $nome, $preco) {
    return 'Produto: ' . $id . '<br>Nome: ' . $nome . '<br>Preço: ' .$preco;
});

Route::get('/cadastro', function () {
    return '
        <form method="POST" action="/cadastro">
            <input type="text" name="nome" placeholder="Digite seu nome">
            <br><br>
            <input type="number" name="idade" placeholder="Digite sua idade">
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
    ';
});

Route::post('/cadastro', function (Request $request) {
    return 'Nome recebido: ' . $request->nome . '<br>Idade recebida: ' . $request->idade;
});




