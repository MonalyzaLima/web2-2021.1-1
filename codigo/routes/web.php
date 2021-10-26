<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItensVendaController;

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
Route::get('/index', [ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']);
Route::post('/store',[ClienteController::class, 'store']);
Route::get('/show/{id}', [ClienteController::class, 'show']);
Route::get('/edit/{id}', [ClienteController::class, 'edit']);
Route::put('/update/{id}', [ClienteController::class, 'update']);
Route::delete('/delete/{id}', [ClienteController::class, 'destroy']);
Route::delete('/clientes/showvenda', [ClienteController::class, 'showvenda']);


//fornecedores
Route::get('/fornecedor/index', [FornecedorController::class, 'index']);
Route::get('/fornecedor/create',[FornecedorController::class, 'create']);
Route::post('/fornecedor/store',[FornecedorController::class, 'store']);
Route::get('/fornecedor/show/{id}', [FornecedorController::class, 'show']);
Route::get('/fornecedor/edit/{id}', [FornecedorController::class, 'edit']);
Route::put('/fornecedor/update/{id}', [FornecedorController::class, 'update']);
Route::delete('/fornecedor/delete/{id}', [FornecedorController::class, 'destroy']);

//Vendas
Route::get('/vendas/index',[VendaController::class, 'index']);
Route::get('/vendas/create',[VendaController::class, 'create']);
Route::post('/vendas/store',[VendaController::class, 'store']);
Route::get('/vendas/show/{id}', [VendaController::class, 'show']);
Route::get('/vendas/edit/{id}', [VendaController::class, 'edit']);
Route::put('/vendas/update/{id}', [VendaController::class, 'update']);
Route::delete('/vendas/delete/{id}', [VendaController::class, 'destroy']);

//Produtos
Route::get('/produtos/index',[ProdutoController::class, 'index']);
Route::get('/produtos/create',[ProdutoController::class, 'create']);
Route::post('/produtos/store',[ProdutoController::class, 'store']);
Route::get('/produtos/show/{id}', [VendaController::class, 'show']);
Route::get('/produtos/edit/{id}', [VendaController::class, 'edit']);
Route::put('/produtos/update/{id}', [VendaController::class, 'update']);
Route::delete('/produtos/delete/{id}', [VendaController::class, 'destroy']);



//Itens_venda
Route::get('/itensvenda/index',[ItensVendaController::class, 'index']);
Route::get('/itensvenda/create',[ItensVendaController::class, 'create']);
Route::post('/itensvenda/store',[ItensVendaController::class, 'store']);

//Itens_compra
Route::get('/itenscompra/index',[ItensCompraController::class, 'index']);
Route::get('/itenscompra/create',[ItensCompraController::class, 'create']);
Route::post('/itenscompra/store',[ItensCompraController::class, 'store']);