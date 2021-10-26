<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de clientes</title>
    </head>
    <body>
        <form action="store" method="post">
            @csrf
            <label form = "" > Nome cliente </label>
            <input type="text" name="nome" id="nome">
            <label form = "" > Débito </label>
            <input type="text" name="debito" id="nome">
            <label form = "" > Endereço </label>
            <input type="text" name="endereco" id="nome">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>