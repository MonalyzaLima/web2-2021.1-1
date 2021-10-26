<h1> Página de entrada </h1>


@foreach ($entradas as $entrada)
    <ul>
        <li>nota fiscal: {{$entrada->notaFiscal}}</li>
        <li>valor total: {{$entrada->valorTotal}}</li>
        <li>quantidade {{$entrada->quantidade}}</li>
    </ul>

@endforeach


