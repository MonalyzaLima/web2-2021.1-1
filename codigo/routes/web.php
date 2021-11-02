<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItensVendaController;
use App\Http\Controllers\ItensEntradaController;

use App\Http\Controllers\EnderecoController;

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

Route::get('/', function () {
    return view('welcome');
});

//clientes
Route::get('/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/create',[ClienteController::class, 'create'])->name('cliente.create');
Route::post('/store',[ClienteController::class, 'store'])->name('cliente.store');
Route::get('/show/{id}', [ClienteController::class, 'show'])->name('cliente.show');
Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/delete/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco']);

//endereços
Route::get('/enderecos/show/{id}', [EnderecoController::class, 'show'])->name('endereco.show');
Route::get('/enderecos/create/{id}',[EnderecoController::class, 'create'])->name('endereco.create');
Route::post('/enderecos/store',[EnderecoController::class, 'store'])->name('endereco.store');


//fornecedores
Route::get('/fornecedores/index', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/fornecedores/create',[FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/fornecedores/store',[FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/fornecedores/show/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::put('/fornecedores/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/fornecedores/delete/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');

//Vendas
Route::get('/vendas/index',[VendaController::class, 'index'])->name('venda.index');
Route::get('/vendas/create',[VendaController::class, 'create'])->name('venda.create');
Route::post('/vendas/store',[VendaController::class, 'store'])->name('venda.store');
Route::get('/vendas/show/{id}', [VendaController::class, 'show'])->name('venda.show');
Route::get('/vendas/edit/{id}', [VendaController::class, 'edit'])->name('venda.edit');
Route::put('/vendas/update/{id}', [VendaController::class, 'update'])->name('venda.update');
Route::delete('/vendas/delete/{id}', [VendaController::class, 'destroy'])->name('venda.delete');

//Produtos
Route::get('/produtos/index',[ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produtos/create',[ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produtos/store',[ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produtos/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
Route::delete('/produtos/delete/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

//Entradas
Route::get('/entradas/index',[EntradaController::class, 'index'])->name('entrada.index');
Route::get('/entradas/create',[EntradaController::class, 'create'])->name('entrada.create');
Route::post('/entradas/store',[EntradaController::class, 'store'])->name('entrada.store');
Route::get('/entradas/show/{id}', [EntradaController::class, 'show'])->name('entrada.show');
Route::get('/entradas/edit/{id}', [EntradaController::class, 'edit'])->name('entrada.edit');
Route::put('/entradas/update/{id}', [EntradaController::class, 'update'])->name('entrada.update');
Route::delete('/entradas/delete/{id}', [EntradaController::class, 'destroy'])->name('entrada.delete');

//Itens_venda
Route::get('/itensvenda/show/{id}',[ItensVendaController::class, 'show'])->name('itensvenda.show');;
Route::get('/itensvenda/create/{id}',[ItensVendaController::class, 'create'])->name('itensvenda.create');;
Route::post('/itensvenda/store',[ItensVendaController::class, 'store'])->name('itensvenda.store');;

//Itens_entrada
Route::get('/itensentrada/show/{id}',[ItensEntradaController::class, 'show'])->name('itensentrada.show');;
Route::get('/itensentrada/create/{id}',[ItensEntradaController::class, 'create'])->name('itensentrada.create');;
Route::post('/itensentrada/store',[ItensEntradaController::class, 'store'])->name('itensentrada.store');;














