<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de fornecedor</title>
    </head>
    <body>
        <form action="../update/{{$entrada->id}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nome do fornecedor </label>
            <input type="text" name="nome" id="nome" value="{{$entrada->notaFiscal}}">
            <label form = "" > cnpj </label>
            <input type="text" name="cnpj" id="nome" value="{{$entrada->valorTotal}}">
            <label form = "" > email </label>
            <input type="text" name="email" id="nome" value="{{$entrada->quantidade}}">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>