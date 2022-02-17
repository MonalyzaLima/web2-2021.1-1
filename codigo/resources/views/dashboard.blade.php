@extends('layouts.sidebar')

@section('titulo','Dashboard')

@section('conteudo')  
<link rel="stylesheet" href="/public/css/dashboard.css">
<body>
    <main class="main">
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
        </header>
        <div class="content">
            <div class="galeria" style="text-align: center;">
                <img src="{{asset('img/Fiat_argo.png')}}" alt="">
            </div>
            <br>
            <div class="d-flex justify-content-lg-evenly">
                <a class="btn btn btn-dark btn-lg" href="{{route('venda.create')}}" role="button">Efetuar Venda</a>
                <a class="btn btn btn-dark btn-lg" href="{{route('compra.create')}}" role="button">Efetuar Compra</a>
            </div>   
            </br>
        </div>
    </main>
</body>
@endsection('conteudo')

