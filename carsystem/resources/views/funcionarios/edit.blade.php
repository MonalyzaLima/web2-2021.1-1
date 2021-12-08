@extends('layouts.sidebar')

@section('titulo','Funcionários')

@section('conteudo')  
<link rel="stylesheet" href="{{ URL::asset('css/funcionario.css'); }}">   
<link rel="stylesheet" href="{{ URL::asset('css/addFuncionario.css'); }}">   
<body>
    <main>
        <header>
            <i class="menu-toggle disabled" data-feather="menu"></i>
            <div class="header-conteudo">
                <h1>EDITAR FUNCIONÁRIO</h1>
            </div>
        </header>
        <div class="content">
            <form action="/update/employee" method="POST" class="formulario">
                <div class="conteudo-cadastro">
                    <input type="hidden" name="employeeId"value="">
                    <label name="nome" class="label1">Nome</label>
                    <input type="text" name="nome" id="nome" value="">
                    <label name="nivelAcesso" class="label2">Nível de Acesso</label>
                    <select name="nivelAcesso" id="nivelAcesso">
                        <option value="1" >Limitado</option>
                        <option value="2" >Total</option>
                    </select>
                    <label for="cpf" class="label3">CPF</label>
                    <input type="text" name="cpf" id="cpf" value="">
                    <label for="usuario" class="label4">Usuário</label>
                    <input type="text" name="usuario" id="usuario" value="">
                    <label for="senha" class="label5">Senha</label>
                    <input type="password" name="senha" id="senha" value=""><br>
                    <label for="email" class="label6">Email</label>
                    <input type="text" name="email" id="email" value="">
                </div>
                <div class="botoes">
                    <button type="reset" onclick="location.href=`${host}/employee`">CANCELAR <i data-feather="x"></i></button>
                    <button type="submit" class="submit">SALVAR <i data-feather="check"></i></button>
                </div>
            </form>
            <div class="modal mensagem disabled">
                <div>
                    <button type="button" onclick="location.href=`${host}/employee`">
                        <i data-feather="x"></i>
                    </button>
                </div>
            </div>
            </div>
    </main>
</body>
@endsection('conteudo')