<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Clientes
Route::get('/clientes/index', function () {
    return view('clientes.index');
})->name('cliente.index');

Route::get('/clientes/create', function () {
    return view('clientes.create');
})->name('cliente.create');

Route::get('/clientes/edit', function () {
    return view('clientes.edit');
})->name('cliente.edit');


//Funcionários
Route::get('/funcionarios/index', function () {
    return view('funcionarios.index');
})->name('funcionario.index');

Route::get('/funcionarios/create', function () {
    return view('funcionarios.create');
})->name('funcionario.create');

Route::get('/funcionarios/edit', function () {
    return view('funcionarios.edit');
})->name('funcionario.edit');

//FORNECEDORES
Route::get('/fornecedores/index', function () {
    return view('fornecedores.index');
})->name('fornecedor.index');

Route::get('/fornecedores/create', function () {
    return view('fornecedores.create');
})->name('fornecedor.create');

Route::get('/fornecedores/edit', function () {
    return view('fornecedores.edit');
})->name('fornecedor.edit');

//Produtos
Route::get('/produtos/index', function () {
    return view('produtos.index');
})->name('produto.index');

Route::get('/produtos/create', function () {
    return view('produtos.create');
})->name('produto.create');

Route::get('/produtos/edit', function () {
    return view('produtos.edit');
})->name('produto.edit');

//Compras
Route::get('/compras/index', function () {
    return view('compras.index');
})->name('compra.index');

Route::get('/compras/create', function () {
    return view('compras.create');
})->name('compra.create');

Route::get('/compras/edit', function () {
    return view('compras.edit');
})->name('compra.edit');

//Vendas
Route::get('/vendas/index', function () {
    return view('vendas.index');
});
Route::get('/vendas/create', function () {
    return view('vendas.create');
})->name('venda.create');

Route::get('/vendas/edit', function () {
    return view('vendas.edit');
})->name('venda.edit');

