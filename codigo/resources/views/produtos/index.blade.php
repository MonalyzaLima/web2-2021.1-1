@extends('layouts.main')

@section('titulo','Lista de produtos')

@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor de compra</th>
      <th scope="col">Valor de venda</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produtos as $produto)

        <tr>
        <td>{{$produto->nomeProduto}}</td>
        <td>{{$produto->valorCompra}}</td>
        <td>{{$produto->valorVenda}}</td>
        <td>{{$produto->quantidade}}</td>
        <td> 
            <form action="{{route('produto.edit', ['id' => $produto->id])}}" method="GET">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        <td>         
            <form action="{{route('produto.delete', ['id' => $produto->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary" >Deletar</button>
            </form>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

<form action="{{route('produto.create')}}" method="GET">
  <button type="submit" class="btn btn-primary">Cadastrar novo produto</button>
</form>

@endsection('conteudo') 