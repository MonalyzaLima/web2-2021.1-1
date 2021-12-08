@extends('layouts.sidebar')

@section('titulo','Funcionários')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/funcionario.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FUNCIONÁRIOS</h1>
            </div>
        </header>
        <button type="button" class="btn btn-success">Adicionar Funcionário</button>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Email</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="abrir-modal" onclick="consultarFuncionario()">
                            <i data-feather="search"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')