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
                <h1>EDITAR CLIENTE</h1>
            </div>
        </header>
        <div class="content">
                    <form action="" method="POST">
                        <div class="conteudo-cadastro">
                            <input type="hidden" name="clientId" value="">
                            <label for="nome" class="label1">Nome</label>
                            <input type="text" name="nome" id="nome" value="">
                            <label for="cpf" class="label2">CPF</label>
                            <input type="text" name="cpf" id="cpf" value="">
                        </div>
                        <div class="botoes">
                            <button type="reset" onclick="location.href=`${host}/client`">CANCELAR <i data-feather="x"></i></button>
                            <button type="submit" class="submit">SALVAR <i data-feather="check"></i></button>
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