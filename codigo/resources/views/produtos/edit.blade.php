@extends('layouts.main')

@section('titulo','Edição de produtos')

@section('conteudo')
        <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label form = "" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto"  value="{{$produto->nomeProduto}}">
            </div>
            <div class="mb-3">
                <label form = "" class="form-label">Valor de Compra</label>
                <input type="text" class="form-control" name="valorCompra" id="valorCompra" value="{{$produto->valorCompra}}">
            </div>
            <div class="mb-3">
                <label form = "" class="form-label">Valor de Venda</label>
                <input type="text" class="form-control" name="valorVenda" id="valorVenda" value="{{$produto->valorVenda}}">
            </div>
            <div class="mb-3">
                <label form = "" class="form-label">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
@endsection('conteudo')