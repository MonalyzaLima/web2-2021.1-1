@extends('layouts.sidebar')

@section('titulo','Compras')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/compra.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>COMPRAS</h1>
            </div>
        </header>
        <div class="col-lg-12 text-right pr-5">
            <a class="btn btn-dark mr-3" href="{{route('compra.create')}}" role="button">Adicionar Compra</a>
        </div>
        <div class="content">
            <table class="tabela-consulta">
                <thead>
                    <tr>
                        <td>Nota Fiscal</td>
                        <td>Quantidade de itens</td>
                        <td>Valor total</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($compra as $compra)
                    <tr>
                        <td>{{ $compra->notaFiscal }}</td>
                        <td>{{ $compra->quantidade }}</td>
                        <td>{{ $compra->valorTotal }}</td>
                        <td> 
                            <form action="{{route('compra.edit', $compra)}}" method="GET">
                                <button type="submit" class="btn btn-dark">Vizualizar</button>
                            </form>
                        </td>
                        <td>         
                            <form action="{{route('compra.delete', ['id' => $compra->id])}}" method="POST">
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