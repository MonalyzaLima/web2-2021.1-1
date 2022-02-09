<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Models\Funcionario;


class FuncionarioController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::all();
     
        return view('funcionarios.index', ['funcionarios' => $funcionarios ]); 
    }

    public function create(){
        return view('funcionarios.create');
    }

    public function store(StoreFuncionarioRequest $request){
        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->save();
        return redirect()->route('funcionario.index');
    }

    public function show($id){
        if($id){
            $funcionario = Funcionario::where('id', $id)->get();
        }
        else{
            $funcionario = Funcionario::all();
        }
        return view('funcionarios.show', ['funcionarios'=>$funcionario]);
    }

    public function edit($id){
        $funcionario = Funcionario::findorFail($id);
        return view('funcionarios.edit',['funcionario'=>$funcionario]);
    }

    public function update(Request $request){
        Funcionario::find($request->id)->update($request->except('_method'));
        return redirect()->route('funcionario.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Funcionario::findorFail($id)->delete();
        return redirect()->route('funcionario.index')->with('msg', 'Funcionário apagado');

    }

}
