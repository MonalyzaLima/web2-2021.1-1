
@extends('layouts.main')

@section('titulo','Lista de entradas')

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
    @foreach ($entradas as $entrada)
        <tr>
        <td>{{$entrada->notaFiscal}}</td>
        <td>{{$entrada->valorTotal}}</td>
        <td>
          <form action="{{route('entrada.showentrada', ['id' => $entrada->id])}}" method="GET">
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>

        </td>
        <td> 
            <form action="{{route('entrada.edit', ['id' => $entrada->id])}}" method="GET">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
           
        
        <td>         
            <form action="{{route('entrada.delete', ['id' => $entrada->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

<form action="{{route('entrada.create')}}" method="GET">
  <button type="submit" class="btn btn-primary">Cadastrar nova entrada</button>
</form>

@endsection('conteudo')
