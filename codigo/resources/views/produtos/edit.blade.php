@extends('layouts.main')

@section('titulo','Edição de produtos')

@section('conteudo')
        <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label form = "" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control @error('nomeProduto') is-invalid @enderror" name="nomeProduto" id="nomeProduto"  value="{{$produto->nomeProduto}}">
                    @error('nomeProduto')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label form = "" class="form-label">Valor de Compra</label>
                    <input type="text" class="form-control @error('valorCompra') is-invalid @enderror" name="valorCompra " id="valorCompra" value="{{$produto->valorCompra}}">
                    @error('valorCompra')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label form = "" class="form-label">Valor de Venda</label>
                    <input type="text" class="form-control @error('valorVenda') is-invalid @enderror" name="valorVenda" id="valorVenda" value="{{$produto->valorVenda}}">
                    @error('valorVenda')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label form = "" class="form-label">Quantidade</label>
                    <input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
                    @error('quantidade')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('produto.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </form>
@endsection('conteudo')