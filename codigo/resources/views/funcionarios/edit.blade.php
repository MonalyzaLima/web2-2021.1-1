@extends('layouts.sidebar')

@section('titulo','Funcionários')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/funcionario.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addFuncionario.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>FUNCIONÁRIOS</h1>
            </div>
        </header>
            <div class="container custom-form">
                <div class="custom-image">
                    <img src="{{ asset('img/icons/clientes.png') }}" alt="rocket_contact"/>
                </div>
                <form action="{{route('funcionario.store')}}" method="POST">
                    @method('POST')
                    @csrf
                    <h3>Edição de funcionário</h3>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome *" value="{{$users->name}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" placeholder="CPF *" value="{{$users->cpf}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço *" value="{{$users->endereco}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone *" value="{{$users->telefone}}" />
                            </div>
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <form action="{{route('funcionario.index')}}">
                                            <a class="btnCustomCancel" href="{{route('funcionario.index')}}" role="button">Cancelar</a>
                                        </form>
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
    </main>
</body>
@endsection('conteudo')  