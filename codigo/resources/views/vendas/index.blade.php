<h1> Página de vendas </h1>


@foreach ($vendas as $venda)
    <ul>
        <li>nota fidcal: {{$venda->notaFiscal}}</li>
        <li>valor total: {{$venda->valorTotal}}</li>
        <li> <a href="{{route('vendaedit', ['id' => $venda->id])}}">Editar venda</a></li>

        <form action="{{route('vendaedit', ['id' => $venda->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </ul>

@endforeach