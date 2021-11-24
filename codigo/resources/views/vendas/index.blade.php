@extends('layouts.main')

@section('titulo','Lista de vendas')

@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nota Fiscal</th>
      <th scope="col">Valor Total</th>
      <th scope="col">Itens</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($vendas as $venda)
        <tr>
        <td>{{$venda->notaFiscal}}</td>
        <td>{{$venda->valorTotal}}</td>
        <td>
          <form action="{{route('venda.showvenda', ['id' => $venda->id])}}" method="GET">
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>

        </td>
        <td> 
            <form action="{{route('venda.edit', ['id' => $venda->id])}}" method="GET">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        <td>         
            <form action="{{route('venda.delete', ['id' => $venda->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

<form action="{{route('cliente.create')}}" method="GET">
  <button type="submit" class="btn btn-primary">Cadastrar nova venda</button>
</form>

@endsection('conteudo')