@extends('layouts.sidebar')

@section('titulo','Produtos')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/produto.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addProduto.css'); }}">   

<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>PRODUTOS</h1>
            </div>
        </header>
        <div class="content">
            <form action="/adding/product" method="POST">
                <div class="conteudo-cadastro">
                    <label for="nome" class="label1">Nome do produto</label>
                    <input type="text" name="nome" id="nome" required>
                    <label for="ano" class="label2">Ano</label>
                    <input type="number" name="ano" id="ano" required>
                    <label for="valorVenda" class="label3">Valor de venda do produto</label>
                    <input type="number" name="valorVenda" id="valor_venda" required min="0">
                    <label for="cor" class="label4">Cor</label>
                    <input type="text" name="cor" id="cor" required>
                    <label for="marca" class="label5">Marca</label>
                    <input type="text" name="marca" id="marca" required>
                    <label for="quantidade" class="label6">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" required>
                </div>
                <div class="botoes">
                    <button type="reset" onclick="location.href=`${host}/product`">CANCELAR <i data-feather="x"></i></button>
                    <button type="submit" class="submit">CADASTRAR <i data-feather="check"></i></button>
                </div>
            </form>
            <div class="modal mensagem disabled">
                <div>
                    <button type="button" onclick="location.href=`${host}/product`">
                        <i data-feather="x"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection('conteudo')