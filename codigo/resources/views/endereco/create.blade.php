<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de endereços</title>
    </head>
    <body>
        <form action="{{route('endereco.store')}}" method="post">
            @csrf
            <label form = "" > Logradouro </label>
            <input type="text" name="logradouro" id="logradouro">
            <label form = "" > Bairro </label>
            <input type="text" name="bairro" id="bairro">
            <label form = "" > Cidade </label>
            <input type="text" name="cidade" id="cidade">
            <label form = "" > UF </label>
            <input type="text" name="uf" id="uf">
            {{$cliente_id}}
            <input type="hidden" name="cliente_id" id="{{$cliente_id}}">
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>

