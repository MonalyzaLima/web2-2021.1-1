<h1> Página de entrada </h1>


@foreach ($entradas as $entrada)
    <ul>
        <li>nota fiscal: {{$entrada->notaFiscal}}</li>
        <li>valor total: {{$entrada->valorTotal}}</li>
        <li>quantidade {{$entrada->quantidade}}</li>
        <li> <a href="{{route('entrada.edit', ['id' => $entrada->id])}}">Editar Cliente</a></li>

        <form action="{{route('entrada.delete', ['id' => $entrada->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>

    </ul>

@endforeach


