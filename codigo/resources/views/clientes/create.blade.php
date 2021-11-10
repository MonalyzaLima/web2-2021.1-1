<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
    <form action="{{route('cliente.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label form = "" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Débito</label>
            <input type="text" class="form-control" name="debito" id="debito">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('cliente.index')}}">
             <button type="submit" class="btn btn-primary">Cancelar</button>
         </form>
    </div>
@endsection('conteudo')