<?php

namespace App\Http\Controllers;

use App\Produto;

class ProdutoController extends Controller {

    function getProduto($id) {
        $produto = Produto::find($id);
        if($produto == null){
            return "Este Produto não existe! ";
        }
        return view('produtos/produto', compact('produto'));
    }
    function getProdutos(){
        $ps = Produto::all();
        return view('produtos/todos', compact('ps'));
    }
}
