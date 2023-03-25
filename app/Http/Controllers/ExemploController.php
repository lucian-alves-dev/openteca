<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ExemploController extends Controller
{
    public function listagemView()
    {
        $produtos = Produto::all();
        dd($produtos);
    }
}
