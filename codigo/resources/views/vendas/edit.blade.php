@extends('layouts.main')

@section('titulo','Edição de vendas')

@section('conteudo')
    <form action="{{route('venda.update', ['id' => $venda->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label form = "" class="form-label">Nota Fiscal</label>
            <input type="text" class="form-control" name="notaFiscal" id="notaFiscal"  value="{{$venda->notaFiscal}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Débito</label>
            <input type="text" class="form-control" name="debito" id="debito" value="{{$venda->valorTotal}}">
        </div>
        <div class="botoes">
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('venda.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')