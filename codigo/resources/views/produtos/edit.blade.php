<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de produtos</title>
    </head>
    <body>
        <form action="{{route('produtoupdate', ['id' => $produto->id])}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nome do produto</label>
            <input type="text" name="nomeProduto" id="nomeProduto" value="{{$produto->nomeProduto}}">
            <label form = "" > Valor de compra </label>
            <input type="text" name="valorCompra" id="valorCompra" value="{{$produto->valorCompra}}">
            <label form = "" > Valor de venda </label>
            <input type="text" name="valorVenda" id="valorVenda" value="{{$produto->valorVenda}}">
            <label form = "" > Quantidade </label>
            <input type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>