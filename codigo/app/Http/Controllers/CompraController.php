<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\FormaPagamento;
use App\Models\Produto;
use App\Models\ProdutoCompra;
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

    public function edit($id)
    {
        $fornecedores = Fornecedor::all();
        $formasPagamento = FormaPagamento::all();
        $produtos = Produto::all();
        $compra = Compra::find($id);
        return view('compras.edit', compact('fornecedores', 'formasPagamento', 'produtos', 'compra'));
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
        $compra->notaFiscal = $request->notaFiscal;
        $compra->idFornecedor = $request->fornecedor;
        $compra->save();

        //Salva produtoVenda
        foreach($produtos as $key => $produto){
            $produtocompra = new ProdutoCompra;
            $produtocompra->valorTotal = $valorTotalProduto;
            $produtocompra->valorUnitario = $produto->valorVenda;
            $produtocompra->quantidade = $request->quantidade[$key];
            $produtocompra->idProduto = $produto->id;
            $produtocompra->idCompra = $compra->id;
            $produtocompra->save();
        }

        return redirect()->route('compra.index');
    }

    public function update (Request $request)
    {
        $compra = Compra::find($request->id);
        
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

        $compra->valorTotal = $valorTotal;
        $compra->idFormaPagamento = $request->formaPagamento;
        $compra->idFornecedor = $request->fornecedor;
        $compra->notaFiscal = $request->notaFiscal;
        $compra->save();


        return redirect()->route('venda.index');
    }

    
    public function destroy($id)
    {
        try{
            Compra::findorFail($id)->delete();
            return redirect()->route('compra.index')->with('msg', 'Compra apagada');

        }catch(\Exception $e){
            return response()->json(['erro: ' => $e->getMessage()], 401);
        }
    }
}

