@extends('layouts.sidebar')

@section('titulo','Fornecedores')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/fornecedor.css'); }}">
<link rel="stylesheet" href="{{ URL::asset('css/addFornecedor.css'); }}">  
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>EDITAR FORNECEDOR</h1>
            </div>
        </header>       
        <div class="content">
            <form action="" method="post">
                <div class="conteudo-cadastro">
                    <input type="hidden" id="id" name="id" value="">
                    <label for="nome" class="label1">Nome</label><br>
                    <input type="text" id="nome" name="nome" value="">
                    <label for="cnpj" class="label2">CNPJ</label><br>
                    <input type="text" id="cnpj" name="cnpj" value="">
                    <label for="email" class="label5">Email</label><br>
                    <input type="email" id="email" name="email" value="">
                </div>
                <div class="botoes">
                    <button type="reset" onclick="location.href=`${host}/provider`">CANCELAR <i data-feather="x"></i></button>
                    <button type="submit" class="submit">SALVAR <i data-feather="check"></i></button>
                </div>
            </form>
            <div class="modal mensagem disabled">
                <div>
                    <button type="button" onclick="location.href=`${host}/provider`">
                        <i data-feather="x"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection('conteudo')