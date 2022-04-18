<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    function cadastro_novo(){
        return view('novo_fornecedor');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        

        $fornecedor = new Fornecedor();
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function listar(){
        $fornecedores = Fornecedor::all();

        return view('lista_fornecedor', ['fornecedores' => $fornecedores]);
    }

    function alterar($id){
        $fornecedor = Fornecedor::findOrFail($id);

        return view('altera_fornecedor', ['fornecedor' => $fornecedor]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function excluir($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');
    }

    function relacionamento(){
        $fornecedor = Fornecedor::all();
        
        return view('lista_produto_fornecedor', ['fornecedor' => $fornecedor]);
    }
}
