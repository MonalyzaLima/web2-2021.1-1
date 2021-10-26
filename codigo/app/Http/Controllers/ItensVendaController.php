<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItensVendaController extends Controller
{
    public function index(){
        $itensVenda = ItensVenda::all();
        return view('itensvenda.index', ['itensVenda' => $itensVenda ]); 
    }

    public function create(){
        return view('itensvenda.create');
    }

    
    public function store(Request $request){
        $itensVenda = new Venda();
        $itensVenda->notaFiscal = $request->notaFiscal;
        $itensVenda->valorTotal = $request->valorTotal;
        $itensVenda->save();
        return redirect('vendas/index');
    }

    public function edit($id){
        $itensVenda = ItensVenda::findorFail($id);
        return view('itensVenda.edit',['itensVenda'=>$itensVenda]);
    }

    public function update(Request $request){
        ItensVenda::find($request->id)->update($request->except('_method'));
        return redirect('itensVenda.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        ItensVenda::find0rFail($id)->delete();
        return redirect('itensVenda/index')->with('msg', 'Item apagado');
    }

}
