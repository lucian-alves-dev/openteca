<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha-conta', [UsuarioController::class, 'contaView']);
Route::post('/fazer-login', [UsuarioController::class, 'fazerLogin']);

Route::get('/pesquisa-livro', [LivroController::class, 'pesquisaView']);
Route::get('/info-livro', [LivroController::class, 'infoView']);
Route::get('/meus-livros', [LivroController::class, 'meusView']);


// As views ficam na pasta resources/views
// Todas as views vão ter a extensão .blade.php