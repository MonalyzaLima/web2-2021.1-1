@extends('layouts.main')

@section('titulo','Lista de clientes')

@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Débito</th>
      <th scope="col">Endereços</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
        <tr>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->debito}}</td>
        <td>
          <form action="{{route('cliente.showendereco', ['id' => $cliente->id])}}" method="GET">
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>

        </td>
        <td> 
            <form action="{{route('cliente.edit', ['id' => $cliente->id])}}" method="GET">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
           
        
        <td>         
            <form action="{{route('cliente.delete', ['id' => $cliente->id])}}" method="POST">
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
  <button type="submit" class="btn btn-primary">Cadastrar novo cliente</button>
</form>

@endsection('conteudo')