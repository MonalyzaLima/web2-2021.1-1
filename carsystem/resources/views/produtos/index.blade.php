@extends('layouts.sidebar')

@section('titulo','Produtos')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/produto.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>PRODUTOS</h1>
            </div>
        </header>
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('produto.create')}}" role="button">Adicionar Produto</a>
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Ano</td>
                        <td>Valor de venda</td>
                        <td>Mais informações</td>
                        <td>Alterar</td>
                        <td>Deletar</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->ano}}</td>
                        <td>{{$produto->valorVenda}}</td>
                        <td></td>
                        <td> 
                            <form action="{{route('produto.edit', ['id' => $produto->id])}}" method="GET">
                                <button type="submit" class="btn btn-dark">Alterar</button>
                            </form>
                        </td>
                        <td>         
                            <form action="{{route('produto.delete', ['id' => $produto->id])}}" method="POST">
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