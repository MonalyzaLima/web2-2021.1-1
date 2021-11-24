<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

@extends('layouts.main')

@section('titulo','Cadastro de fornecedores')

@section('conteudo')
    <form action="{{route('fornecedor.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nome do fornecedor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome">
                @error('nome')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">CNPJ</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" id="cnpj">
                @error('cnpj')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">E-mail</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <div class="botoes">
        <form action="{{route('fornecedor.index')}}">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
@endsection('conteudo')

