<h1> Página de fornecedores </h1>


@foreach ($fornecedores as $fornecedor)
    <ul>
        <li>nome do fornecedor: {{$fornecedor->nome}}</li>
        <li>cnpj do fornecedor: {{$fornecedor->cnpj}}</li>
        <li>email do fornecedor: {{$fornecedor->email}}</li>
    </ul>
@endforeach