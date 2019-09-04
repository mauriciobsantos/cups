<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){
       //Carrega todos os produtos da tabela
        $produtos = Produto::all();

        // carrega o produto do id dade
        //$p = Produto::find(3);
        // dd($p);
    
        //Retornando A view listarProdutos.blade.php
        return view('listarProdutos',compact('produtos'));
    
        
    }
}
