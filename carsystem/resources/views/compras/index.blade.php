@extends('layouts.sidebar')

@section('titulo','Compras')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/compra.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>COMPRAS</h1>
            </div>
        </header>
        <button type="button" class="btn btn-success">Adicionar Compra</button>
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
                        <td><button type="button" class="abrir-modal" onclick="consultarCompra()">
                            <i data-feather="search"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')