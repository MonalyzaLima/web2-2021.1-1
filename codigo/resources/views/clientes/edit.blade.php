@extends('layouts.main')

@section('titulo','Edição de clientes')

@section('conteudo')
    <form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label form = "" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" name="nome" id="nome"  value="{{$cliente->nome}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Débito</label>
            <input type="text" class="form-control" name="debito" id="debito" value="{{$cliente->debito}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="{{$cliente->endereco}}">
        </div>
        <div class="botoes">
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('cliente.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')