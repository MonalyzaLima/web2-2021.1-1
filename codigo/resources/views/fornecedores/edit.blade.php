@extends('layouts.sidebar')

@section('titulo','Fornecedores')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/fornecedor.css'); }}">
<link rel="stylesheet" href="{{ URL::asset('css/addFornecedor.css'); }}">  
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FORNECEDORES</h1>
            </div>
        </header>
            <div class="container custom-form">
                <div class="custom-image">
                    <img src="{{ asset('img/icons/clientes.png') }}" alt="rocket_contact"/>
                </div>
                <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="POST">
                    @method('PUT')
                    @csrf
                    <h3>Edição de fornecedor</h3>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome *" value="{{$fornecedor->nome}}"/>
                                @error('nome')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="cnpj" class="form-control @error('cnpj') is-invalid @enderror" placeholder="CNPJ *" value="{{$fornecedor->cnpj}}" />
                                @error('cnpj')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço *" value="{{$fornecedor->endereco}}" />
                                @error('endereco')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone *" value="{{$fornecedor->telefone}}" />
                                @error('telefone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail *" value="{{$fornecedor->email}}" />
                                @error('email')
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
                                            <input class="btnCustomSubmit" type="submit" name="btnSubmit" class="btnContact" value="Efetuar alteração" />
                                        </div>
                                    </form>
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