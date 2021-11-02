<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="./css/flexbox.css">
    <title> @yield('titulo') </title>
</head>

<body>
  <header>
    <h1>Sistema de vendas</h1>
  </header>

  <section>
    <article>
      <button>Produtos</button>
      <button>Fornecedores</button>
      <button>Entradas</button>
      <button>Vendas</button>
    </article>

    <article id="conteudo">
      @yield('conteudo')
    </article>

    <article id="footer">
      copyright @ WEBII
    </article>
  </section>
</body>
</html>


