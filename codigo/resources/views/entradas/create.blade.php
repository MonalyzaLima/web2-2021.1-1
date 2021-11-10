<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de entrada</title>
    </head>
    <body>
        <form action="{{route('entrada.store')}}" method="post">
            @csrf
            <label form = "" > Nota fiscal </label>
            <input type="text" name="notaFiscal" id="nome">
            <label form = "" > Valor total </label>
            <input type="text" name="valorTotal" id="nome">
            <label form = "" > Nº fornecedor </label>
            <input type="text" name="fornecedor_id" id="fornecedor_id">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>

