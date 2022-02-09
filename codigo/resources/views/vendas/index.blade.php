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
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('venda.create')}}" role="button">Adicionar Venda</a>
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nota Fiscal</td>
                        <td>Quantidade de itens</td>
                        <td>Valor total</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($venda as $venda)
                    <tr>
                    <td>{{ $venda->notaFiscal }}</td>
                            <td>{{ $venda->quantidade }}</td>
                            <td>{{ $venda->valorTotal }}</td>
                            <td> 
                                <form action="{{ route('venda.edit', $venda) }}" method="GET">
                                    <button type="submit" class="btn btn-dark">Visualizar</button>
                                </form>
                            </td>
                        
                        <td>         
                            <form action="{{route('venda.delete', ['id' => $venda->id])}}" method="POST">
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



