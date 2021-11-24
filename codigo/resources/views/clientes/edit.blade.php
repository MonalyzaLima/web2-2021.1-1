@extends('layouts.main')

@section('titulo','Edição de clientes')

@section('conteudo')
    <form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome"  value="{{$cliente->nome}}">
                @error('nome')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Débito</label>
                <input type="text" class="form-control @error('debito') is-invalid @enderror" name="debito" id="debito" value="{{$cliente->debito}}">
                @error('debito')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="{{$cliente->endereco}}">
            </div>
        </div>
        <div class="botoes">
            <p></p>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('cliente.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')