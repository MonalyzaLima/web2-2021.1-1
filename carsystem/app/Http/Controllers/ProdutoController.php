<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProdutoRequest;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos ]); 
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(StoreProdutoRequest $request){
        $produto = new Produto();
        $produto->nomeProduto = $request->nomeProduto;
        $produto->valorCompra = $request->valorCompra;
        $produto->valorVenda = $request->valorVenda;
        $produto->quantidade = $request->quantidade;
        $produto->save();
        return redirect()->route('produto.index');
    }

    public function edit($id){
        $produto = Produto::findorFail($id);
        return view('produtos.edit',['produto'=>$produto]);
    }

    public function update(StoreProdutoRequest $request){
        Produto::find($request->id)->update($request->except('_method'));
        return redirect()->route('produto.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Produto::findorFail($id)->delete();
        return redirect()->route('produto.index')->with('msg', 'Produto apagado');
    }
}