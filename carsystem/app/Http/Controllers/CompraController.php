<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\FormaPagamento;
use App\Models\Produto;
use App\Models\ProdutoVenda;
use App\Models\Compra;

class CompraController extends Controller
{
    public function index(){
        $compra = Compra::all();
        return view('compras.index', ['compra' => $compra ]); 
    }
    
    public function create()
    {
        $fornecedores = Fornecedor::all();
        $formasPagamento = FormaPagamento::all();
        $produtos = Produto::all();
        return view('compras.create', compact('fornecedores', 'formasPagamento', 'produtos'));
    }

    public function store (Request $request)
    {
        $compra = new Compra;
        $compra->quantidade = array_sum($request->quantidade);
        
        $produtos = Produto::whereIn('id', $request->produto)->get();
        $valorTotal = 0;
        
        //Caucula valor total geral
        foreach($produtos as $key => $produto){
            $valorTotalProduto = $produto->valorCompra * $request->quantidade[$key];
            $valorTotal += $valorTotalProduto;
        }

        $compra->valorTotal = $valorTotal;
        $compra->idFormaPagamento = $request->formaPagamento;
        $compra->idFornecedor = $request->fornecedor;

        $compra->save();

        //Salva produtoVenda
        foreach($produtos as $key => $produto){
            $produtoCompra = new ProdutoCompra;
            $produtoCompra->valorTotal = $valorTotalProduto;
            $produtoCompra->valorUnitario = $produto->valorVenda;
            $produtoCompra->quantidade = $request->quantidade[$key];
            $produtoCompra->idProduto = $produto->id;
            $produtoCompra->idVenda = $venda->id;
            $produtoCompra->save();
        }

        return 'VENDA REALIZADA COM SUCESSO!';
    }
}

