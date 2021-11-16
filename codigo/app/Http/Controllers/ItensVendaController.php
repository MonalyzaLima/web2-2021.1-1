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
        $venda = $itensVenda->venda()->first();

        if($venda){
            echo $venda->notaFiscal;
        }
    } 
   
    public function create($id){
        return view('itensvenda.create',['produto_id'=>$id]) ('itensvenda.create',['venda_id'=>$id]);
    }

    public function store(Request $request){
        $itensVenda = new Endereco();
        $itensVenda->produto_id = $request->produto_id;
        $itensVenda->venda_id = $request->venda_id;
        $itensVenda->quantidade = $request->quantidade;
        $itensVenda->valorUnitario = $request->valorUnitario;
        $itensVenda->valorTotal = $request->valorTotal;
        $itensVenda->save();
        return redirect()->route('venda.show',['id'=>5]);
    }

}
