<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS local -->
        <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css'); }}">    
    </head>

    <title> @yield('titulo') </title>

    <nav class="sidebar-menu">
        <i class="menu-toggle" data-feather="arrow-left"></i>
        <div class="logo-container">
            <span class="logo">CARSYSTEM</span>
        </div>
            <ul class="menu-list">
                <li class="menu-option" id="vendas">
                    <a href="/sale"><i data-feather="shopping-bag"></i> VENDAS</a>
                </li>
                <li class="menu-option" id="compras">
                    <a href="/purchase"><i data-feather="shopping-cart"></i> COMPRAS</a>
                </li>
                <li class="menu-option" id="produtos">
                    <a href="/product"><i data-feather="package"></i> PRODUTOS</a>
                </li>
                <li class="menu-option" id="fornecedores">
                    <a href="/provider"><i data-feather="truck"></i> FORNECEDORES</a>
                </li>
                <li class="menu-option" id="funcionarios">
                    <a href="/employee"><i data-feather="user"></i> FUNCIONÁRIOS</a>
                </li>
                <li class="menu-option" id="clientes">
                    <a href="/client"><i data-feather="users"></i> CLIENTES</a>
                </li>
            </ul>
            
            <div class="logout">
                <a href="/logout">SAIR<i data-feather="log-out"></i></a>
            </div>
    </nav>

    @yield('conteudo')

</html>


