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
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $users)
                    <tr>
                        <td>{{$users->name}}</td>
                        <td>{{$users->cpf}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')