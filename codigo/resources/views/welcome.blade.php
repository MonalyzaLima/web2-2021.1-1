@extends('layouts.sidebar')

@section('titulo','Dashboard')

@section('conteudo')  
<link rel="stylesheet" href="/public/css/dashboard.css">
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
        </header>
        <div class="content">
            <div class="galeria">
                <img class="foto" src="../public/img/che-r.png" alt="">
                <img class="foto" src="../public/img/Fiat_argo.png" alt="">
                <img class="foto" src="public/img/toro-r.png" alt="">
            </div>
            <br>
            <div class="d-flex justify-content-lg-evenly">

                <button type="button" class="btn btn-primary btn-lg">Efetuar venda</button>
                <button type="button" class="btn btn-primary btn-lg">Efetuar compra</button>
            </div>   
            </br>
        </div>
    </main>
</body>
@endsection('conteudo')
