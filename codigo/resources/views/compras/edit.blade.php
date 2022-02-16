@extends('layouts.sidebar')

@section('titulo','Compras')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/compra.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addCompra.css'); }}">   
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>EDITAR COMPRA</h1>
            </div>
        </header>
        <div class="content" style="padding: 1.5em 3em; width: 100% !important;">
            <form action="{{ route('compra.update') }}" method="POST" id="formSale">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$compra->id}}">
                    <div class="col-md-4">
                        <label for="" class="text-white">Nota fiscal</label>
                        <input disabled required id="notaFiscal" name="notaFiscal" type="text" value="{{ $compra->notaFiscal }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-white">Fornecedor</label>
                            @foreach ($fornecedores as $fornecedor)
                                <input disabled required id="nomeFornecedor" name="nomeFornecedor" type="text" class="form-control" value="{{ $fornecedor->nome }}">
                            @endforeach
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-white">Forma de pagamento</label>
                            @foreach ($formasPagamento as $formaPagamento)
                                <input disabled required id="formaPagamento" name="formaPagamento" type="text" class="form-control" value="{{ $formaPagamento->descricao }}">
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
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach($compra->produtoCompras as $key => $produtoCompra)
                                <tr id="produto_{{$key}}" class="p-2">
                                    <th class="p-1 pr-4">
                                        <input disabled required id="nomeProduto" name="nomeProduto" type="text" class="form-control" value="{{ $produtoCompra->produto->nomeProduto }}">
                                    </th>
                                    <th class="p-1">
                                        <input disabled required onchange="mudaQuantidade({{$key}})" value="{{$produtoCompra->quantidade}}" id="quantidade_{{$key}}" name="quantidade[]" type="number" class="form-control">
                                    </th>
                                    <th class="p-1">
                                    R$ <label id="valorUnitario_{{$key}}">{{ number_format($produtoCompra->produto->valorCompra, 2, '.', '') }}</label>
                                    </th>
                                    <th>
                                        R$ <label class="valoresTotais" id="valorTotal_{{$key}}">{{number_format($produtoCompra->valorTotal, 2, '.', '')}}</label>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="info">
                    <div class="total">
                        <h2>Total</h2>
                        <span>R$ <label id="valorTotal">{{number_format($compra->valorTotal, 2, '.', '')}}</label></span>
                    </div>
                    <div class="btn-sale">
                        <button type="reset" onclick="location.href='{{route('compra.index')}}'">CANCELAR <i data-feather="x"></i></button>
                    </div>
                </div>
                </form>
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
                                <option data-valor-unitario="{{ $produto->valorVenda }}" value="{{ $produto->id }}">{{ $produto->nomeProduto }}</option>
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