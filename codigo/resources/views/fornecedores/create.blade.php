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
                <h1>ADICIONAR FORNECEDOR</h1>
            </div>
        </header>       
        <div class="content">
                    <form action="/adding/provider" method="post">
                        <div class="conteudo-cadastro">
                        <label for="nome" class="label1">Nome</label>
                            <input type="text" id="nome" name="nome" required>
                            <label for="cnpj" class="label2">CNPJ</label>
                            <input type="text" id="cnpj" name="cnpj" required>
                            <label for="email" class="label5">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="botoes">
                            <button type="reset" onclick="location.href=`${host}/provider`">CANCELAR <i data-feather="x"></i></button>
                            <button type="submit" class="submit">CADASTRAR <i data-feather="check"></i></button>
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