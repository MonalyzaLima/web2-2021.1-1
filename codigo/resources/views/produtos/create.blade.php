<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de produtos')

@section('conteudo')
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control @error('nomeProduto') is-invalid @enderror" name="nomeProduto" id="nomeProduto">
                @error('nomeProduto')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Valor de Compra</label>
                <input type="text" class="form-control @error('valorCompra') is-invalid @enderror" name="valorCompra" id="valorCompra">
                @error('valorCompra')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Valor de Venda</label>
                <input type="text" class="form-control @error('valorVenda') is-invalid @enderror" name="valorVenda" id="valorVenda">
                @error('valorVenda')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Quantidade</label>
                <input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade">
                @error('quantidade')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('produto.index')}}">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
@endsection('conteudo')
