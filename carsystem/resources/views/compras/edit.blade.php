@extends('layouts.sidebar')

@section('titulo','Compras')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/compra.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addCompra.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>EDITAR COMPRA</h1>
            </div>
        </header>
        <div class="content">
            <form action="/adding/purchase" method="POST" id="formPurchase">
                <div class="buttons-modal">
                    <button type="button" class="abrir-modal">Adicionar Produto<i data-feather="package"></i></button>
                    <button type="button" class="abrir-modal">Selecionar Fornecedor<i data-feather="truck"></i></button>
                </div>
                <div class="modal produtos disabled">
                    <div>
                        <button type="button" class="fechar-modal">
                            <i data-feather="x"></i>
                        </button>
                        <label for="product-search">Filtrar<i data-feather="filter"></i></label>
                        <input type="text" name="product-search" placeholder="Digite o nome do produto" onkeyup="filtrarProduto(this.value)">
                        <div class="table">
                            <table class="lista produtos">
                                <thead>
                                    <tr class="topo-tabela">
                                        <th colspan="5">PRODUTOS</th>
                                    </tr>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Quantidade</th>
                                        <th>Valor Unitario</th>
                                        <th>Selecionar</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal fornecedores disabled">
                    <div>
                        <button type="button" class="fechar-modal">
                            <i data-feather="x"></i>
                        </button>
                        <label for="product-search">Filtrar<i data-feather="filter"></i></label>
                        <input type="text" name="customer-search" placeholder="Digite o nome do fornecedor" onkeyup="filtrarFornecedor(this.value)">
                        <div class="table">
                            <table class="lista fornecedor">
                                <thead>
                                    <tr class="topo-tabela">
                                        <th colspan="3">Fornecedor</th>
                                    </tr>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Selecionar</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tabela-produtos">
                    <table>
                        <thead>
                            <tr class="topo-tabela">
                                <th colspan="6">LISTA DE PRODUTOS</th>
                            </tr>
                            <tr>
                                <th>N° item</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Valor Unitario</th>
                                <th>Total</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="info">
                    <div class="fornecedor">
                        <h2>Fornecedor</h2>
                        <span>
                            <input name="fornecedor" required style="opacity: 0; width: 0; pointer-events: none;">
                        </span>
                    </div>
                    <div class="total">
                        <h2>Total</h2>
                        <span>R$ 0.00</span>
                    </div>
                    <div class="btn-sale">
                        <button type="reset" onclick="location.href=`${host}/purchase`">CANCELAR <i data-feather="x"></i></button>
                        <button type="submit" class="submit">FINALIZAR <i data-feather="check"></i></button>
                    </div>
                </div>
                    </form>
                    <div class="modal mensagem disabled">
                        <div>
                            <button type="button" onclick="location.href=`${host}/purchase`">
                                <i data-feather="x"></i>
                            </button>
              
                        </div>
                    </div>
                </div>
    </main>
</body>
@endsection('conteudo')