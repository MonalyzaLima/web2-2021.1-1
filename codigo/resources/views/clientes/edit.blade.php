<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de clientes</title>
    </head>
    <body>
        <form action="../update/{{$cliente->id}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nome cliente </label>
            <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
            <label form = "" > Débito </label>
            <input type="text" name="debito" id="nome" value="{{$cliente->debito}}">
            <label form = "" > Endereço </label>
            <input type="text" name="endereco" id="nome" value="{{$cliente->endereco}}">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>