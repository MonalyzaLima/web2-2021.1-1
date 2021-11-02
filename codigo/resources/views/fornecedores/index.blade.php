<h1> Página de fornecedores </h1>


@foreach ($fornecedores as $fornecedor)
    <ul>
        <li>nome do fornecedor: {{$fornecedor->nome}}</li>
        <li>cnpj do fornecedor: {{$fornecedor->cnpj}}</li>
        <li>email do fornecedor: {{$fornecedor->email}}</li>
        <li> <a href="{{route('fornecedor.edit', ['id' => $fornecedor->id])}}">Editar fornecedor</a></li>

        <form action="{{route('fornecedor.delete', ['id' => $fornecedor->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>

    </ul>
@endforeach