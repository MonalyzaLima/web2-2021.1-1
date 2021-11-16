@extends('layouts.main')

@section('titulo','Edição de entradas')

@section('conteudo')
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label form = "" class="form-label">Nota Fiscal</label>
            <input type="text" class="form-control" name="nome" id="nome"  value="{{$entrada->notaFiscal}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Débito</label>
            <input type="text" class="form-control" name="debito" id="debito" value="{{$entrada->valorTotal}}">
        </div>
        <div class="botoes">
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('entrada.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')
