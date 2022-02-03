@extends('layouts.sidebar')

@section('titulo','Clientes')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/cliente.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addCliente.css'); }}">   

<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>CLIENTES</h1>
            </div>
        </header>
            <div class="container custom-form">
                <div class="custom-image">
                    <img src="{{ asset('img/icons/clientes.png') }}" alt="rocket_contact"/>
                </div>
                <form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="POST">
                    @method('PUT')
                    @csrf
                    <h3>Edição de cliente</h3>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome *" value="{{$cliente->nome}}"/>
                                @error('nome')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="cpf" class="form-control form-control @error('cpf') is-invalid @enderror" placeholder="CPF *" value="{{$cliente->cpf}}" />
                                @error('cpf')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="endereco" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço *" value="{{$cliente->endereco}}" />
                                @error('endereco')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone *" value="{{$cliente->telefone}}" />
                                @error('telefone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="dataNascimento" class="form-control @error('dataNascimento') is-invalid @enderror" placeholder="Data de nascimento *" value="{{$cliente->cpf}}" />
                                @error('dataNascimento')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="row pt-3">
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
            <div class="row pt-3">
                <div class="col-6">
                    <div class="form-group">
                        <form action="{{route('cliente.index')}}">
                            <input class="btnCustomCancel" type="submit" name="btnSubmit" class="btnContact" value="Cancelar" />
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
@endsection('conteudo')





