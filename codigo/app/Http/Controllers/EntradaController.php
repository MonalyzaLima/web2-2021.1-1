<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntradaRequest;
use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    public function index(){
        $entradas = Entrada::all();
        return view('entradas.index', ['entradas' => $entradas ]); 
    }
    public function create(){
        return view('entradas.create');
    }

    public function store(StoreEntradaRequest $request){
        $entrada = new Entrada();
        $entrada->notaFiscal = $request->notaFiscal;
        $entrada->valorTotal = $request->valorTotal;
        $entrada->save();
        return redirect('/entradas/index');
    }

    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entradas.edit',['entrada'=>$entrada]);
    }

    public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('/entradas/index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Entrada::find0rFail($id)->delete();
        return redirect('/entradas/index')->with('msg', 'Entrada apagada');
    }

    public function showentrada(){
        $entradas = Entrada::all();

        foreach($entradas as $entrada){
            echo "<p> Entrada: $Entrada->notaFiscal </p>";

            $itens_entrada = $entrada->itens_entrada()->get();

            if(count($itens_entrada)>0){
                echo "<p>Itens:</p>";
                foreach($itens_entradas as $itens_entrada){
                    echo "<p>[$itens_entrada->id , $itens_entrada->notaFiscal]</p>";
                }
            }
        }
    }
}
