<h1> Página de clientes </h1>


@foreach ($clientes as $cliente)
    <ul>
        <li>nome do cliente: {{$cliente->nome}}</li>
        <li>debito do cliente: {{$cliente->debito}}</li>
        <li>endereco {{$cliente->endereco}}</li>
    </ul>
@endforeach

