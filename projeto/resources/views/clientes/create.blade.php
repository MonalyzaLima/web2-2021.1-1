@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
    <div id="form">
        <form action="{{route('cliente.store')}}" method="post">
            @csrf
            <label form = "" > Nome cliente </label>
            <input type="text" name="nome" id="nome">
            <label form = "" > Débito </label>
            <input type="text" name="debito" id="nome">
            <label form = "" > Endereço </label>
            <input type="text" name="endereco" id="nome">
            <input type="submit" name="cadastrar">
        </form>
    </div>
@endsection('conteudo')