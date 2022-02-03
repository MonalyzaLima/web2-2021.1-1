@extends('layouts.sidebar')

@section('titulo','Clientes')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/cliente.css'); }}">
<link rel="stylesheet" href="{{ URL::asset('ccss/bootstrap.css'); }}">
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>CLIENTES</h1>
            </div>
        </header>
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('cliente.create')}}" role="button">Adicionar Cliente</a>
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->cpf}}</td>
                        <td> 
                            <form action="{{route('cliente.edit', ['id' => $cliente->id])}}" method="GET">
                                <button type="submit" class="btn btn-dark">Alterar</button>
                            </form>
                        </td>
                        <td>         
                            <form action="{{route('cliente.delete', ['id' => $cliente->id])}}" method="POST">
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


