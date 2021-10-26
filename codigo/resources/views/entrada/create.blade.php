<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de entrada</title>
    </head>
    <body>
        <form action="store" method="post">
            @csrf
            <label form = "" > Nota fiscal </label>
            <input type="text" name="notaFiscal" id="nome">
            <label form = "" > Valor total </label>
            <input type="text" name="valorTotal" id="nome">
            <label form = "" > Quantidade </label>
            <input type="text" name="quantidade" id="nome">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>