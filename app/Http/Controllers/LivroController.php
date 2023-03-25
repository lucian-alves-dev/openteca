<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function pesquisaView()
    {
        return view('livros/pesquisa');
    }

    public function infoView()
    {
        return view('livros/info');
    }

    public function meusView()
    {
        return view('livros/meus');
    }
}
