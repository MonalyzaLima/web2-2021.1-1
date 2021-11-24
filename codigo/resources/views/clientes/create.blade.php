<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
    <form action="{{route('cliente.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome">
                @error('nome')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Débito</label>
                <input type="text" class="form-control @error('debito') is-invalid @enderror" name="debito" id="debito">
                @error('debito')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco">
            </div>
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
            <form action="{{route('cliente.index')}}">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
    </div>
@endsection('conteudo')