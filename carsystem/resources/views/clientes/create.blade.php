@extends('layouts.sidebar')

@section('titulo','Clientes')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/cliente.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addCliente.css'); }}">   

<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>CLIENTES</h1>
            </div>
        </header>
        <div class="content">
            <form action="{{route('cliente.index')}}" method="POST">
                <div class="conteudo-cadastro">
                    <label for="nome" class="label1">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                    <label for="cpf" class="label2">CPF</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
                <div class="botoes">
                    <button type="reset" onclick="location.href=`${host}/client`">CANCELAR <i data-feather="x"></i></button>
                    <button type="submit" class="submit">CADASTRAR <i data-feather="check"></i></button>
                </div>
            </form>
            <div class="modal mensagem disabled">
                <div>
                    <button type="button" onclick="location.href=`${host}/client`">
                        <i data-feather="x"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection('conteudo')