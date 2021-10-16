<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedores', [FornecedorController::class, 'show']);

Route::get('/aluno', function(){
    return view('aluno');
});

Route::get('/teste', function(){
    return view('aluno', ['teste' => 'teste']);
});

Route::get('/aluno', function(){
    $nome = "Monalyza";
    return view('aluno', ['nome' => $nome]);
});

Route::get('/parametros', function(){
    $nome = "Monalyza";
    $idade = 21;

    return view('aluno',
    [
        'pnome' => $nome,
        'pidade' => $idade,
        'pprofissao' => "programadora"
    ]);
});

//Parâmetro opcional
Route::get('/opcional/{id}', function($id){
    return view('aluno', ['id' => $id]);
});

//Parâmetro obrigatório
Route::get('/obrigatorio/{id?}', function($id){
    return view('aluno', ['id' => $id]);
});

//Parâmetro obrigatório com valor default
Route::get('/obrigatoriodefault/{id?}', function($id = 1){
    return view('aluno', ['id' => $id]);
});

//Parâmetro default null e testa na view se nulo
Route::get('/obrigatorionull/{id?}', function($id = null){
    return view('aluno', ['id' => $id]);
});

//Utilização dos query params
Route::get('/queryparams', function(){
    //Acessa os parâmetros  vindos do navegador pelo método request
    //$busca recebe esse parâmetro digitado
    //public/queryparams?pesquisa=livro
    $busca  = request('pesquisa');
    return view('aluno', ['pesquisa' => $busca]);
});

//Aula 13/10

//clientes
Route::get('/index', [ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']);
Route::post('/store',[ClienteController::class, 'store']);

//fornecedores
Route::get('/fornecedorindex', [FornecedorController::class, 'index']);
Route::get('/fornecedorcreate',[FornecedorController::class, 'create']);
Route::post('/fornecedorstore',[FornecedorController::class, 'store']);





