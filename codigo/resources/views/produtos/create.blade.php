<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
    </head>
    <body>
        <form action="store" method="post">
            @csrf
            <label form = "" > Nome do produto </label>
            <input type="text" name="nome" id="nome">
            <label form = "" > Valor de compra </label>
            <input type="text" name="valorCompra" id="valorCompra">
            <label form = "" > Valor de venda </label>
            <input type="text" name="valorVenda" id="valorVenda">
            <label form = "" > Quantidade </label>
            <input type="text" name="quantidade" id="quantidade">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>
