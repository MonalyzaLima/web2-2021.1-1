<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de vendas')

@section('conteudo')
    <form action="{{route('entrada.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label form = "" class="form-label">Nota Fiscal</label>
            <input type="text" class="form-control @error('notaFiscal') is-invalid @enderror" name="notaFiscal" id="notaFiscal">
            @error('notaFiscal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Valor Total</label>
            <input type="text" class="form-control @error('valorTotal') is-invalid @enderror" name="valorTotal" id="valorTotal">
            @error('valorCompra')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label form = "" class="form-label">Nº Fornecedor</label>
            <input type="text" class="form-control" name="fornecedor_id" id="fornecedor_id">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('entrada.index')}}">
             <button type="submit" class="btn btn-primary">Cancelar</button>
         </form>
    </div>
@endsection('conteudo')

