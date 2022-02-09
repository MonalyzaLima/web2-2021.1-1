@extends('layouts.sidebar')

@section('titulo','Funcionários')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/funcionario.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FUNCIONÁRIOS</h1>
            </div>
        </header>
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('funcionario.create')}}" role="button">Adicionar Funcionário</a>
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Alterar</td>
                        <td>Deletar</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($funcionarios as $funcionario)
                    <tr>
                        <td>{{$funcionario->nome}}</td>
                        <td>{{$funcionario->cpf}}</td>
                        <td> 
                            <form action="{{route('funcionario.edit', ['id' => $funcionario->id])}}" method="GET">
                                <button type="submit" class="btn btn-dark">Alterar</button>
                            </form>
                        </td>
                        <td>         
                            <form action="{{route('funcionario.delete', ['id' => $funcionario->id])}}" method="POST">
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