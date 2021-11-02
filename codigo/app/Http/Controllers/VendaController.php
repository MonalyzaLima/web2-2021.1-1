<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;


class VendaController extends Controller
{
    public function index(){
        $vendas = Venda::all();
        return view('vendas.index', ['vendas' => $vendas ]); 
    }
    public function create(){
        return view('vendas.create');
    }

    public function store(Request $request){
        $venda = new Venda();
        $venda->notaFiscal = $request->notaFiscal;
        $venda->valorTotal = $request->valorTotal;
        $venda->save();
        return redirect('vendas/index');
    }

    public function edit($id){
        $venda = Venda::findorFail($id);
        return view('vendas.edit',['venda'=>$venda]);
    }

    public function update(Request $request){
        Venda::find($request->id)->update($request->except('_method'));
        return redirect('/vendas/index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::find0rFail($id)->delete();
        return redirect('/vendas/index')->with('msg', 'Venda apagado');
    }

}
