<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\FormaPagamento;
use App\Models\Produto;
use App\Models\ProdutoVenda;
use App\Models\Venda;

class VendaController extends Controller
{
    public function index(){
        $venda = Venda::all();
        return view('vendas.index', ['venda' => $venda ]); 
    }
    
    public function create()
    {
        $clientes = Cliente::all();
        $formasPagamento = FormaPagamento::all();
        $produtos = Produto::all();
        return view('vendas.create', compact('clientes', 'formasPagamento', 'produtos'));
    }

    public function store (Request $request)
    {
        $venda = new Venda;
        $venda->quantidade = array_sum($request->quantidade);
        
        $produtos = Produto::whereIn('id', $request->produto)->get();
        $valorTotal = 0;
        
        //Caucula valor total geral
        foreach($produtos as $key => $produto){
            $valorTotalProduto = $produto->valorVenda * $request->quantidade[$key];
            $valorTotal += $valorTotalProduto;
        }

        $venda->valorTotal = $valorTotal;
        $venda->idFormaPagamento = $request->formaPagamento;
        $venda->idCliente = $request->cliente;

        $venda->save();

        //Salva produtoVenda
        foreach($produtos as $key => $produto){
            $produtoVenda = new ProdutoVenda;
            $produtoVenda->valorTotal = $valorTotalProduto;
            $produtoVenda->valorUnitario = $produto->valorVenda;
            $produtoVenda->quantidade = $request->quantidade[$key];
            $produtoVenda->idProduto = $produto->id;
            $produtoVenda->idVenda = $venda->id;
            $produtoVenda->save();
        }

        return 'VENDA REALIZADA COM SUCESSO!';
    }
}
