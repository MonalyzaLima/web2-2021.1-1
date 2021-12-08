@extends('layouts.sidebar')

@section('titulo','Fornecedores')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/fornecedor.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FORNECEDORES</h1>
            </div>
        </header>
        <form action="{{route('fornecedor.create')}}" method="GET">
            <button type="button" class="btn btn-success">Adicionar fornecedor</button>
        </form>        
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>CNPJ</td>
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
                        <td><button type="button" class="abrir-modal" onclick="consultarFornecedor()">
                            <i data-feather="search"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')