@extends('layouts.sidebar')

@section('titulo','Vendas')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/venda.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addVenda.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>Editar VENDA</h1>
            </div>
        </header>
        <div class="content" style="padding: 1.5em 3em; width: 100% !important;">
            <form action="{{ route('venda.edit') }}" method="POST" id="formSale">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-white">Selecionar Cliente</label>
                        <select class="form-control" name="cliente" required>
                            <option value="">Selecione</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-white">Selecionar Forma de pagamento</label>
                        <select class="form-control" name="formaPagamento" required>
                            <option value="">Selecione</option>  
                            @foreach ($formasPagamento as $formaPagamento)
                                <option value="{{ $formaPagamento->id }}">{{ $formaPagamento->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="tabela-produtos">
                    <table id="myTable">
                        <thead>
                            <tr class="topo-tabela">
                                <th colspan="6">LISTA DE PRODUTOS</th>
                            </tr>
                            <tr>
                                <th style="width: 47%;">Nome</th>
                                <th style="width: 10%;">Quantidade</th>
                                <th>Valor Unitario</th>
                                <th>Total</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr id="produto_1" class="p-2">
                                <th class="p-1 pr-4">
                                    <select required onchange="mudaProduto(1)" id="select_1" class="form-control" name="produto[]">
                                        <option value="">Selecione o produto</option>  
                                        @foreach ($produtos as $produto)
                                            <option data-valor-unitario="{{ $produto->valorVenda }}" value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th class="p-1">
                                    <input required onchange="mudaQuantidade(1)" id="quantidade_1" name="quantidade[]" type="number" class="form-control">
                                </th>
                                <th class="p-1">
                                   R$ <label id="valorUnitario_1">00,00</label>
                                </th>
                                <th>
                                    R$ <label class="valoresTotais" id="valorTotal_1">00,00</label>
                                </th>
                                <th><button onclick="javascript:removerProduto(1)" type="button" class="btn">Remover</button></th>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick="javascript:adicionarProduto()" type="button" class="btn btn-primary p-1 mt-2">Adicionar +1 produto</button>
                </div>
                <div class="info">
                    <div class="cliente">
                        <h2>Cliente</h2>
                        <span>
                            Teste
                        </span>
                    </div>
                    <div class="pagamento">
                        <h2>Pagamento</h2>
                        <span>
                            teste
                        </span>
                    </div>
                    <div class="total">
                        <h2>Total</h2>
                        <span>R$ <label id="valorTotal">0.00</label></span>
                    </div>
                    <div class="btn-sale">
                        <button type="reset" onclick="location.href=`${host}/sale`">CANCELAR <i data-feather="x"></i></button>
                        <button type="submit" class="submit">FINALIZAR <i data-feather="check"></i></button>
                    </div>
                </div>
                </form>
                <div class="modal mensagem disabled">
                    <div>
                        <button type="button" onclick="location.href=`${host}/sale`">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                </div>
            </div>
    </main>
</body>


@push('scripts')
    <script>
        var numeroProduto = 1;

        function valorTotal(){
            valoresTotais = document.getElementsByClassName("valoresTotais");
            valorTotalVenda = 0;
            var testDivs = Array.prototype.filter.call(valoresTotais, function(testElement){
                valorTotalVenda += parseFloat(testElement.innerHTML);
            });
            valorTotalElement = document.getElementById("valorTotal");
            valorTotalElement.innerHTML = parseFloat(valorTotalVenda).toFixed(2);
            
        }

        function removerProduto(id){
            document.getElementById("produto_"+id).remove();
        }

        function mudaProduto(id){
            select = document.getElementById("select_"+id);
            valorUnitario = document.getElementById("valorUnitario_"+id);
            valorUnitario = select.options[select.selectedIndex].getAttribute('data-valor-unitario');
            textValorUnitario = document.getElementById("valorUnitario_"+id);
            textValorUnitario.innerHTML = parseFloat(valorUnitario).toFixed(2);
            mudaQuantidade(id)
        }

        function mudaQuantidade(id){
            select = document.getElementById("select_"+id);
            valorUnitario = select.options[select.selectedIndex].getAttribute('data-valor-unitario');

            elementQuantidade = document.getElementById("quantidade_"+id);
            quantidade = elementQuantidade.value;

            elementValorTotal = document.getElementById("valorTotal_"+id);
            elementValorTotal.innerHTML =  parseFloat(quantidade * valorUnitario).toFixed(2);
            valorTotal();
        }

        function adicionarProduto(){
            numeroProduto++;
            tr = `
                    <th class="p-1 pr-4">
                        <select required onchange="mudaProduto(`+numeroProduto+`)" id="select_`+numeroProduto+`" class="form-control" name="produto[]">
                            <option value="">Selecione o produto</option>  
                            @foreach ($produtos as $produto)
                                <option data-valor-unitario="{{ $produto->valorVenda }}" value="{{ $produto->id }}">{{ $produto->nome }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th class="p-1">
                        <input required onchange="mudaQuantidade(`+numeroProduto+`)" id="quantidade_`+numeroProduto+`" name="quantidade[]" type="number" class="form-control">
                    </th>
                    <th class="p-1">
                        R$ <label id="valorUnitario_`+numeroProduto+`">00,00</label>
                    </th>
                    <th>
                        R$ <label class="valoresTotais" id="valorTotal_`+numeroProduto+`">00,00</label>
                    </th>
                <th><button onclick="javascript:removerProduto(`+numeroProduto+`)" type="button" class="btn">Remover</button></th>
            `;

            var tableRef = document.getElementById('tbody');
            row = tableRef.insertRow(-1)
            row.innerHTML = tr;
            row.id = 'produto_'+numeroProduto;
            row.classList.add('p-2');
        }

    </script>
@endpush

@endsection('conteudo')