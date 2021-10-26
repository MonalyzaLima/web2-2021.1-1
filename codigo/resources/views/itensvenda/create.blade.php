<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Item</title>
    </head>
    <body>
        <form action="store" method="post">
            @csrf
            <label form = "" > Nota fiscal </label>
            <input type="text" name="notaFiscal" id="notaFiscal">
            <label form = "" > Valor total </label>
            <input type="text" name="valorTotal" id="valorTotal">
            <input type="hidden" name="id_produto" value={{$id_produto}}>
            <input type="hidden" name="id_venda" value={{$id_venda}}>

            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>




