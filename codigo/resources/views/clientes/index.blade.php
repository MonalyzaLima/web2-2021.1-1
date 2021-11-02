<h1> Página de clientes </h1>


@foreach ($clientes as $cliente)
    <ul>
        <li>nome do cliente: {{$cliente->nome}}</li>
        <li>debito do cliente: {{$cliente->debito}}</li>
        <li>endereco {{$cliente->endereco}}</li>
        <li> <a href="{{route('cliente.edit', ['id' => $cliente->id])}}">Editar Cliente</a></li>

        <form action="{{route('cliente.delete', ['id' => $cliente->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </ul>

@endforeach