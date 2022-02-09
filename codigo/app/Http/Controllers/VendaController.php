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

    public function edit($id)
    {
        $clientes = Cliente::all();
        $formasPagamento = FormaPagamento::all();
        $produtos = Produto::all();
        $venda = Venda::find($id);
        return view('vendas.edit', compact('clientes', 'formasPagamento', 'produtos', 'venda'));
    }

    public function store (Request $request)
    {
        $venda = new Venda;
        $produtos = Produto::whereIn('id', $request->produto)->get();
        $valorTotal = 0;
        
        //Caucula valor total geral
        foreach($produtos as $key => $produto){
            $valorTotalProduto = $produto->valorVenda * $request->quantidade[$key];
            $valorTotal += $valorTotalProduto;
            if($produto->quantidade - $request->quantidade[$key] < 0){
                return redirect()->back()->with('erro', 'Produtos insuficientes!');
            }
        }

        $venda->valorTotal = $valorTotal;
        $venda->idFormaPagamento = $request->formaPagamento;
        $venda->idCliente = $request->cliente;
        $venda->notaFiscal = $request->notaFiscal;

        $venda->save();

        //Salva produtoVenda
        foreach($produtos as $key => $produto){
            $valorTotalProdutoVenda = $produto->valorVenda * $request->quantidade[$key];
            $produtoVenda = new ProdutoVenda;
            $produtoVenda->valorTotal = $valorTotalProdutoVenda;
            $produtoVenda->valorUnitario = $produto->valorVenda;
            $produtoVenda->quantidade = $request->quantidade[$key];
            $produtoVenda->idProduto = $produto->id;
            $produtoVenda->idVenda = $venda->id;
            $produtoVenda->save();
        }

        return redirect()->route('venda.index');
    }

    public function update (Request $request)
    {
        $venda = Venda::find($request->id);
        
        $produtos = Produto::whereIn('id', $request->produto)->get();
        $valorTotal = 0;
        
        //Caucula valor total geral
        /*foreach($produtos as $key => $produto){
            $valorTotalProduto = $produto->valorVenda * $request->quantidade[$key];
            $valorTotal += $valorTotalProduto;
            if($produto->quantidade - $request->quantidade[$key] < 0){
                return redirect()->back()->with('erro', 'Produtos insuficientes!');
            }
        }*/

        $venda->valorTotal = $valorTotal;
        $venda->idFormaPagamento = $request->formaPagamento;
        $venda->idCliente = $request->cliente;
        $venda->notaFiscal = $request->notaFiscal;

        $venda->save();

        //Salva produtoVenda
        foreach($venda->produtoVendas as $key => $produtoVenda){
            $valorTotalProdutoVenda = $produtoVenda->valorVenda * $request->quantidade[$key];
            $produtoVenda->valorTotal = $valorTotalProdutoVenda;
            $produtoVenda->quantidade = $request->quantidade[$key];
            $produtoVenda->save();
        }

        return redirect()->route('venda.index');
    }
}
