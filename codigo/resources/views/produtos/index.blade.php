@extends('layouts.sidebar')

@section('titulo','Produtos')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/produto.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>PRODUTOS</h1>
            </div>
        </header>
        <button type="button" class="btn btn-success">Adicionar produto</button>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Ano</td>
                        <td>Valor de venda</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="abrir-modal" onclick="consultarProduto()">
                            <i data-feather="search"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')