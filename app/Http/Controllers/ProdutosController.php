<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor;

class ProdutosController extends Controller
{
    function cadastro_novo(){
        $fornecedor = Fornecedor::all();

        return view('novo_produto', ['fornecedor' => $fornecedor]);
    }

    function novo(Request $req){

        $nome = $req->input('nome');
        $categoria = $req->input('categoria');
        $NCM = $req->input('NCM');
        $valor = $req->input('valor');
        $id_fornecedor = $req->input('id_fornecedor');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->categoria = $categoria;
        $produto->NCM = $NCM;
        $produto->valor = $valor;
        $produto->id_fornecedor = $id_fornecedor;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function listar(){
        $produtos = Produto::all();

        return view('lista_produto', ['produtos' => $produtos]);
    }

    function alterar($id){
        $produto = Produto::findOrFail($id);
        $fornecedor = Fornecedor::all();

        return view('altera_produto', ['produto' => $produto], ['fornecedor' => $fornecedor]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $categoria = $req->input('categoria');
        $NCM = $req->input('NCM');
        $valor = $req->input('valor');

        $produto = Produto::findOrFail($id);
        $produto->nome = $nome;
        $produto->categoria = $categoria;
        $produto->NCM = $NCM;
        $produto->valor = $valor;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function excluir($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        // Cliente::delete(); - Não é boa prática, mas funciona

        return redirect()->route('produtos_listar');
    }
}
