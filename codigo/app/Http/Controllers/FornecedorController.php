<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFornecedorRequest;
use App\Models\Fornecedor;


class FornecedorController extends Controller
{
 
    public function index(){
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', ['fornecedores' => $fornecedores ]);
    }

    public function create(){
        return view('fornecedores.create');
    }

    public function store(StoreFornecedorRequest $request){
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->email = $request->email;
        $fornecedor->save();
        return redirect()->route('fornecedor.index');

    }

    public function edit($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedores.edit',['fornecedor'=>$fornecedor]);
    }

    public function update(StoreFornecedorRequest $request){
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect()->route('fornecedor.index')->with('msg', 'Cadastro realizado com sucesso');

    }

    public function destroy($id){
        Fornecedor::findorFail($id)->delete();
        return redirect()->route('fornecedor.index')->with('msg', 'Fornecedor apagado');
    }
}
