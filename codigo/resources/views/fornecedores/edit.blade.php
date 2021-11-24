
@extends('layouts.main')

@section('titulo','Edição de fornecedores')

@section('conteudo')
    <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label form = "" class="form-label">Nome do fornecedor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome"  value="{{$fornecedor->nome}}">
                @error('nome')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">CNPJ</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
                @error('cnpj')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label form = "" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$fornecedor->email}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="botoes">
            <p></p>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <form action="{{route('fornecedor.index')}}" method="GET">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
        </div>
    </form>
@endsection('conteudo')