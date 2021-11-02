<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;


class ItensVendaController extends Controller
{
    public function show($id){

        $itensVenda = ItensVenda::find($id);

        if ($itensVenda){
            echo "<p> O item é $itensVenda </p>";
        }

        echo "<h1> Pertence ao produto: </h1>";
        $produto = $itensVenda->produto()->first();

        if($produto){
            echo $produto->nomeProduto;
        }

        echo "<h1> Pertence a venda: </h1>";
        $venda = $itensVenda->entrada()->first();

        if($venda){
            echo $venda->notaFiscal;
        }
    } 
   
    public function create($id){
        return view('itensvenda.create',['produto_id'=>$id]) ('itensvenda.create',['venda_id'=>$id]);
    }

    public function store(Request $request){
        $itensentrada = new Endereco();
        $itensentrada->produto_id = $request->produto_id;
        $itensentrada->venda_id = $request->venda_id;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->valorUnitario = $request->valorUnitario;
        $itensentrada->valorTotal = $request->valorTotal;
        $itensentrada->save();
        return redirect()->route('venda.show',['id'=>5]);
    }

}
