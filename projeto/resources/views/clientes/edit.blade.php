@extends('layouts.grids')

@section('titulo','Edição de clientes')

@section('conteudo')
        <form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nome cliente </label>
            <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
            <label form = "" > Débito </label>
            <input type="text" name="debito" id="nome" value="{{$cliente->debito}}">
            <label form = "" > Endereço </label>
            <input type="text" name="endereco" id="nome" value="{{$cliente->endereco}}">
            <input type="submit" value="Alterar">
        </form>
@endsection('conteudo')