@extends('layouts.sidebar')

@section('titulo','Vendas')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/venda.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>VENDAS</h1>
            </div>
        </header>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Quantidade de itens</td>
                        <td>Valor Unitátio</td>
                        <td>Valor Total</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($venda->produtoVendas as $produtoVenda)
                    <tr>
                        <td>{{ $produtoVenda->produto->nome }}</td>
                        <td>{{ $produtoVenda->quantidade }}</td>
                        <td>{{ $produtoVenda->valorUnitario }}</td>
                        <td>{{ $produtoVenda->valorTotal }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection('conteudo')



