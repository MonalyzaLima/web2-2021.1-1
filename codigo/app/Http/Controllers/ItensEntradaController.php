<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;


class ItensEntradaController extends Controller
{
    public function show($id){

        $itens_entrada = ItensEntrada::find($id);

        if ($itens_entrada){
            echo "<p> O item é $itens_entrada </p>";
        }

        echo "<h1> Pertence ao produto: </h1>";
        $produto = $itens_entrada->produto()->first();

        if($produto){
            echo $produto->nomeProduto;
        }

        echo "<h1> Pertence a entrada: </h1>";
        $entrada = $itens_entrada->entrada()->first();

        if($entrada){
            echo $entrada->notaFiscal;
        }
    } 
   
    public function create($id){
        return view('itensentrada.create',['produto_id'=>$id]) ('itensentrada.create',['venda_id'=>$id]);
    }

    public function store(Request $request){
        $itens_entrada = new Endereco();
        $itens_entrada->produto_id = $request->produto_id;
        $itens_entrada->entrada_id = $request->entrada_id;
        $itens_entrada->quantidade = $request->quantidade;
        $itens_entrada->valorUnitario = $request->valorUnitario;
        $itens_entrada->valorTotal = $request->valorTotal;
        $itens_entrada->save();
        return redirect()->route('entrada.show',['id'=>5]);
    }
}

