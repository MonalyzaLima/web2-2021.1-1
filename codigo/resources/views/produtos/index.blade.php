<h1> Página de produtos </h1>


@foreach ($produtos as $produto)
    <ul>
        <li>nome do produto: {{$produto->nomeProduto}}</li>
        <li>valor de compra: {{$produto->valorCompra}}</li>
        <li>valor de venda {{$produto->valorVenda}}</li>
        <li>quantidade {{$produto->quantidade}}</li>
        <li> <a href="{{route('produtoedit', ['id' => $produto->id])}}">Editar produto</a></li>

        <form action="{{route('produtodelete', ['id' => $produto->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </ul>

@endforeach

