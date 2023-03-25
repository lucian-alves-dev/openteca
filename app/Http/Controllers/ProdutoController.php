<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listagemView()
    {
        $produtos = Produto::all();

        return view('listagem', [
            "produtos" => $produtos,
        ]);
    }
}
