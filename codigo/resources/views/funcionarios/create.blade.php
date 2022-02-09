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
                    <h3>Cadastrar funcionário</h3>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome *" value="{{ old('nome') }}" />
                                @error('nome')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" placeholder="CPF *" value="{{ old('cpf') }}" />
                                @error('cpf')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço *" value="{{ old('endereco') }}" />
                                @error('endereco')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone *" value="{{ old('telefone') }}" />
                                @error('telefone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="dataNascimento" class="form-control @error('dataNascimento') is-invalid @enderror" placeholder="Data de nascimento *" value="{{ old('dataNascimento') }}" />
                                @error('dataNascimento')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror" placeholder="Usuário *" value="{{ old('usuario') }}" />
                                @error('usuario')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="senha" class="form-control @error('senha') is-invalid @enderror" placeholder="Senha *" value="{{ old('senha') }}" />
                                @error('senha')
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
