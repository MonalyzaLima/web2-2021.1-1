<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\CompraController;



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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});


//CLIENTES
Route::group(['prefix' => 'clientes' ], function () {
    Route::get('/index', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/create',[ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/store',[ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::delete('/delete/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
});


//FUNCIONÁRIOS
Route::group(['prefix' => 'funcionarios' ], function () {
    Route::get('/index', [FuncionarioController::class, 'index'])->name('funcionario.index');
    Route::get('/create',[FuncionarioController::class, 'create'])->name('funcionario.create');
    Route::post('/store',[FuncionarioController::class, 'store'])->name('funcionario.store');
    Route::get('/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');
    Route::delete('/delete/{id}', [FuncionarioController::class, 'destroy'])->name('funcionario.delete');
    Route::put('/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
});

//FORNECEDORES
Route::group(['prefix' => 'fornecedores' ], function () {
    Route::get('/index', [FornecedorController::class, 'index'])->name('fornecedor.index');
    Route::get('/create',[FornecedorController::class, 'create'])->name('fornecedor.create');
    Route::post('/store',[FornecedorController::class, 'store'])->name('fornecedor.store');
    Route::get('/show/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
    Route::delete('/delete/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');
});

//PRODUTOS
Route::group(['prefix' => 'produtos' ], function () {
    Route::get('/index',[ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/create',[ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/store',[ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::delete('/delete/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');
});



//VENDAS
Route::group(['prefix' => 'vendas' ], function () {
Route::get('/create', [VendaController::class, 'create'])->name('venda.create');
Route::get('/index', [VendaController::class, 'index'])->name('venda.index');
Route::put('/store', [VendaController::class, 'store'])->name('venda.store');
Route::post('/update', [VendaController::class, 'update'])->name('venda.update');
Route::get('/edit/{id}', [VendaController::class, 'edit'])->name('venda.edit');
Route::put('/delete{id}', [VendaController::class, 'delete'])->name('venda.delete');
});


//COMPRAS
Route::group(['prefix' => 'compras' ], function () {
Route::get('/create', [CompraController::class, 'create'])->name('compra.create');
Route::get('/index', [CompraController::class, 'index'])->name('compra.index');
Route::put('/store', [CompraController::class, 'store'])->name('compra.store');
Route::put('/edit', [CompraController::class, 'edit'])->name('compra.edit');
Route::put('/delete{id}', [CompraController::class, 'delete'])->name('compra.delete');
});


