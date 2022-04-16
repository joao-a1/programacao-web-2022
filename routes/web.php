<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;

Route::get('/', function () {
    return view('welcome');
});

// Clientes
Route::get('/clientes/novo', 
        [ClientesController::class, 'cadastro_novo']);
Route::post('/clientes/novo', [ClientesController::class, 'novo'])->name('clientes_novo');

Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');

// Padrão Laravel {id} puxa o id (registro) selecionado
Route::get('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');

Route::post('/clientes/alterar', [ClientesController::class, 'salvar'])->name('clientes_salvar');

Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');

// Produtos
Route::get('/produtos/novo', 
    [ProdutosController::class, 'cadastro_novo']);
Route::post('/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_novo');

Route::get('/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');

Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produtos_alterar');

Route::post('/produtos/alterar', [ProdutosController::class, 'salvar'])->name('produtos_salvar');

Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'excluir'])->name('produtos_excluir');

// Fornecedores
Route::get('/fornecedores/novo', 
        [FornecedoresController::class, 'cadastro_novo']);
Route::post('/fornecedores/novo', [FornecedoresController::class, 'novo'])->name('fornecedores_novo');

Route::get('/fornecedores/listar', [FornecedoresController::class, 'listar'])->name('fornecedores_listar');

Route::get('/fornecedores/alterar/{id}', [FornecedoresController::class, 'alterar'])->name('fornecedores_alterar');

Route::post('/fornecedores/alterar', [FornecedoresController::class, 'salvar'])->name('fornecedores_salvar');

Route::get('/fornecedores/excluir/{id}', [FornecedoresController::class, 'excluir'])->name('fornecedores_excluir');