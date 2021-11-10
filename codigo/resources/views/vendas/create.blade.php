<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de vendas')

@section('conteudo')
    <form action="{{route('venda.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label form = "" class="form-label">Nota Fiscal</label>
            <input type="text" class="form-control" name="notaFiscal" id="notaFiscal">
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Valor Total</label>
            <input type="text" class="form-control" name="valorTotal" id="valorTotal">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('venda.index')}}">
             <button type="submit" class="btn btn-primary">Cancelar</button>
         </form>
    </div>
@endsection('conteudo')