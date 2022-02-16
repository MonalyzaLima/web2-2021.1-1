<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Models\User;


class FuncionarioController extends Controller
{
    public function index(){
        $users = User::all();
     
        return view('funcionarios.index', ['users' => $users ]); 
    }

    public function create(){
        return view('funcionarios.create');
    }

    public function store(StoreFuncionarioRequest $request){
        $users = new Funcionario();
        $users->nome = $request->name;
        $users->cpf = $request->cpf;
        $users->save();
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
        $users = User::findorFail($id);
        return view('funcionarios.edit',['users'=>$users]);
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
