@extends('layouts.main')

@section('titulo','Edição de vendas')

@section('conteudo')
    <form action="{{route('venda.update', ['id' => $venda->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nota Fiscal</label>
                <input type="text" class="form-control @error('notaFiscal') is-invalid @enderror" name="notaFiscal" id="notaFiscal"  value="{{$venda->notaFiscal}}">
                @error('notaFiscal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Débito</label>
                <input type="text" class="form-control @error('valorTotal') is-invalid @enderror" name="debito" id="debito" value="{{$venda->valorTotal}}">
                @error('valorCompra')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="botoes">
            <p></p>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('venda.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')