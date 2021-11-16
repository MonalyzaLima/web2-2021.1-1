
@extends('layouts.main')

@section('titulo','Edição de fornecedores')

@section('conteudo')
    <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label form = "" class="form-label">Nome do fornecedor</label>
            <input type="text" class="form-control" name="nome" id="nome"  value="{{$fornecedor->nome}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$fornecedor->email}}">
        </div>
        <div class="botoes">
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('fornecedor.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')