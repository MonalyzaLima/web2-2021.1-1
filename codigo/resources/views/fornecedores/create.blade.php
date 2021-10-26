<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de fornecedores</title>
    </head>
    <body>
        <form action="fornecedorstore" method="post">
            @csrf
            <label form = "" > Nome do fornecedor </label>
            <input type="text" name="nome" id="nome">
            <label form = "" > cnpj </label>
            <input type="text" name="cnpj" id="cnpj">
            <label form = "" > email </label>
            <input type="text" name="email" id="email">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>