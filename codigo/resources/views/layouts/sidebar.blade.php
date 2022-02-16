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
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css'); }}">
        <!-- Styles Custom -->
        <link rel="stylesheet" href="{{ asset('css/customStyles.css') }}">
    </head>

    <title> @yield('titulo') </title>

    <nav class="sidebar-menu">
        <div class="logo-container">
            <span class="logo">CARSYSTEM</span>
        </div>
            <ul class="menu-list">
                <li class="menu-option" id="vendas">
                    <a href="{{route('venda.index')}}"><i data-feather="shopping-bag"></i> VENDAS</a>
                </li>
                <li class="menu-option" id="compras">
                    <a href="{{route('compra.index')}}"><i data-feather="shopping-cart"></i> COMPRAS</a>
                </li>
                <li class="menu-option" id="produtos">
                    <a href="{{route('produto.index')}}"><i data-feather="package"></i> PRODUTOS</a>
                </li>
                <li class="menu-option" id="fornecedores">
                    <a href="{{route('fornecedor.index')}}"><i data-feather="truck"></i> FORNECEDORES</a>
                </li>
                <li class="menu-option" id="funcionarios">
                    <a href="{{route('funcionario.index')}}"><i data-feather="user"></i> FUNCIONÁRIOS</a>
                </li>
                <li class="menu-option" id="clientes">
                    <a href="{{route('cliente.index')}}"><i data-feather="users"></i> CLIENTES</a>
                </li>
            </ul>
            
            <div class="logout">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                    this.closest('form').submit();">SAIR</a>            
                </form>
                </form>
            </div>
    </nav>

    <body>
        @yield('conteudo')    
    </body>

   
    @stack('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('erro'))
        Swal.fire({
            title: 'Error!',
            text: '{{session("erro")}}',
            icon: 'error',
            confirmButtonText: 'OK'
        })
        @endif
    </script>

</html>


