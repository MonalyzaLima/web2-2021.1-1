<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index(){
        $entradas = Entrada::all();
        return view('entradas.index', ['entradas' => $entradas ]); 
    }
    public function create(){
        return view('entradas.create');
    }

    public function store(Request $request){
        $entrada = new Entrada();
        $entrada->notaFiscal = $request->notaFiscal;
        $entrada->valorTotal = $request->valorTotal;
        $entrada->save();
        return redirect('vendentradas/index');
    }

    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entrada.edit',['entrada'=>$entrada]);
    }

    public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entrada.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Entrada::find0rFail($id)->delete();
        return redirect('index')->with('msg', 'Entrada apagada');
    }
}
