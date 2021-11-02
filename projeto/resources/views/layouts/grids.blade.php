<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="../css/grids.css">
    <title> @yield('titulo') </title>

</head>

<body>
    <div id="header">
        <h1>Sistema de vendas</h1>
    </div>
    <div class="container">
        <div><a href="#">Produtos</a></div>
        <div><a href="#">Fornecedores</a></div>
        <div><a href="#">Entradas</a></div>
        <div><a href="#">Vendas</a></div>
    </div>
    <div class="conteudo">
      @yield('conteudo')
    </div>
    <footer>copyright @ WEBII</footer>

</body>

</html>
