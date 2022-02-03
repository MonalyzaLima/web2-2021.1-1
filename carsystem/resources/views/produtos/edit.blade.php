@extends('layouts.sidebar')

@section('titulo','Produtos')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/produto.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addProduto.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>PRODUTOS</h1>
            </div>
        </header>
            <div class="container custom-form">
                <div class="custom-image">
                    <img src="{{ asset('img/icons/clientes.png') }}" alt="rocket_contact"/>
                </div>
                <form action="{{route('produto.update', ['id' => $produto->id])}}" method="POST">
                    @method('POST')
                    @csrf
                    <h3>Edição de produto</h3>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome *" value="{{$produto->nome}}" />
                                @error('nome')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="ano" class="form-control @error('ano') is-invalid @enderror" placeholder="Ano *" value="{{$produto->ano}}" />
                                @error('ano')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="cor" class="form-control @error('cor') is-invalid @enderror" placeholder="Cor *" value="{{$produto->cor}}" />
                                @error('cor')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="marca" class="form-control @error('cor') is-invalid @enderror" placeholder="Marca *" value="{{$produto->marca}}" />
                                @error('marca')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="quantidade" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade *" value="{{$produto->quantidade}}" />
                                @error('quantidade')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="valorVenda" class="form-control @error('valorVenda') is-invalid @enderror" placeholder="Valor de venda *" value="{{$produto->valorVenda}}" />
                                @error('valorVenda')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="valorCompra" class="form-control @error('valorCompra') is-invalid @enderror" placeholder="Valor de compra *" value="{{$produto->valorCompra}}" />
                                @error('valorCompra')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <a class="btnCustomCancel" href="{{route('fornecedor.index')}}" role="button">Cancelar</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group text-right">
                                        <input class="btnCustomSubmit" type="submit" name="btnSubmit" class="btnContact" value="Efetuar cadastro" />
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </main>
</body>
@endsection('conteudo')  
