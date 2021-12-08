@extends('layouts.sidebar')

@section('titulo','Vendas')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/venda.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>VENDAS</h1>
            </div>
        </header>
        <button type="button" class="btn btn-success">Adicionar venda</button>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Quantidade de itens</td>
                        <td>Valor total</td>
                        <td>Nota Fiscal</td>
                        <td>Fornecedor</td>
                        <td>Data de compra</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
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