<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de entrada</title>
    </head>
    <body>
        <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
            @csrf
            @method('PUT')
            <label form = "" > Nota fiscal </label>
            <input type="text" name="notaFiscal" id="nome" value="{{$entrada->notaFiscal}}">
            <label form = "" > Valor total </label>
            <input type="text" name="valorTotal" id="nome" value="{{$entrada->valorTotal}}">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>


