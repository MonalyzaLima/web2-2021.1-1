<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de fornecedor</title>
    </head>
    <body>
        <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nome do fornecedor </label>
            <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
            <label form = "" > cnpj </label>
            <input type="text" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
            <label form = "" > email </label>
            <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>

