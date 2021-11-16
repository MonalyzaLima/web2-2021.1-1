@extends('layouts.main')

@section('titulo','Lista de fornecedores')

@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CNPJ</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($fornecedores as $fornecedor)
        <tr>
        <td>{{$fornecedor->nome}}</td>
        <td>{{$fornecedor->cnpj}}</td>
        <td>{{$fornecedor->email}}</td>
        <td> 
            <form action="{{route('fornecedor.edit', ['id' => $fornecedor->id])}}" method="GET">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
           
        
        <td>         
            <form action="{{route('fornecedor.delete', ['id' => $fornecedor->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

<form action="{{route('fornecedor.create')}}" method="GET">
  <button type="submit" class="btn btn-primary">Cadastrar novo fornecedor</button>
</form>

@endsection('conteudo')