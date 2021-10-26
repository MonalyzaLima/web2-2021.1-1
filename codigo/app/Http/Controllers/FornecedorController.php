<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //
    /*public function show(){
        $fornecedores = Fornecedor::all();
        echo($fornecedores);
    } */

    public function index(){
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', ['fornecedores' => $fornecedores ]);
    }

    public function create(){
        return view('fornecedores.create');
    }

    public function store(Request $request){
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->email = $request->email;
        $fornecedor->save();
        return redirect ('fornecedor.index');
    }

    public function edit($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedores.edit',['fornecedor'=>$fornecedor]);
    }

    public function update(Request $request){
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Fornecedor::find0rFail($id)->delete();
        return redirect('index')->with('msg', 'Fornecedor apagado');
    }


}