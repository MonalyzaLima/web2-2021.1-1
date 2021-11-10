<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de produtos')

@section('conteudo')
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label form = "" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" name="nomeProduto" id="nomeProduto">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Valor de Compra</label>
            <input type="text" class="form-control" name="valorCompra" id="valorCompra">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Valor de Venda</label>
            <input type="text" class="form-control" name="valorVenda" id="valorVenda">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('produto.index')}}">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
@endsection('conteudo')
