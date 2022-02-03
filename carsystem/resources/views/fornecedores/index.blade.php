@extends('layouts.sidebar')

@section('titulo','Fornecedores')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/fornecedor.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FORNECEDORES</h1>
            </div>
        </header>
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('fornecedor.create')}}" role="button">Adicionar Fornecedor</a>
        </div>  
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>CNPJ</td>
                        <td>Email</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td>{{$fornecedor->nome}}</td>
                        <td>{{$fornecedor->cnpj}}</td>
                        <td>{{$fornecedor->email}}</td>
                        <td> 
                            <form action="{{route('fornecedor.edit', ['id' => $fornecedor->id])}}" method="GET">
                                <button type="submit" class="btn btn-dark">Alterar</button>
                            </form>
                        </td>
                        <td>         
                            <form action="{{route('fornecedor.delete', ['id' => $fornecedor->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')