<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de fornecedores')

@section('conteudo')
    <form action="{{route('fornecedor.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label form = "" class="form-label">Nome do fornecedor</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" id="cnpj">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('fornecedor.index')}}">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
@endsection('conteudo')

