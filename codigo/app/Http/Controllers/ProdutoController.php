<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nomeProduto;
        $produto->debito = $request->valorCompra;
        $produto->endereco = $request->valorVenda;
        $produto->endereco = $request->quantidade;

        $produto->save();
        return redirect('produtos/index');
    }

    public function edit($id){
        $produto = Produto::findorFail($id);
        return view('produtos.edit',['produto'=>$produto]);
    }

    public function update(Request $request){
        Produto::find($request->id)->update($request->except('_method'));
        return redirect('index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Produto::find0rFail($id)->delete();
        return redirect('index')->with('msg', 'Produto apagado');
    }
}
