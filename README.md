
Carsystem é um sistema WEB de concessionária de automóveis desenvolvido para a disciplina de Laboratório de Programação WEB II do curso Tecnologia em Análise e Desenvolvimentos de Sistemas no Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Guanambi.

<div align="center">

  #### [Tecnologias](#tecnologias) │ [Funcionalidades](#funcionalidades) │ [Acesso](#acesso-ao-sistema) 

</div>

> ## Tecnologias

As tecnologias abaixo foram utilizadas para o desenvolvimento do projeto: 

<img src="https://img.shields.io/static/v1?label=&message=PHP&color=black&style=for-the-badge&logo=PHP"/> <img src="https://img.shields.io/static/v1?label=&message=CSS 3&color=black&style=for-the-badge&logo=CSS3"/> <img src="https://img.shields.io/static/v1?label=&message=JAVASCRIPT&color=black&style=for-the-badge&logo=JAVASCRIPT"/> <img src="https://img.shields.io/static/v1?label=&message=HTML 5&color=black&style=for-the-badge&logo=HTML5"/> 


> ## Funcionalidades

:heavy_check_mark: Cadastro, consulta, edição e remoção de Venda

:heavy_check_mark: Cadastro, consulta, edição e remoção de Compra

:heavy_check_mark: Cadastro, consulta, edição e remoção de Clientes

:heavy_check_mark: Cadastro, consulta, edição e remoção de Fornecedores

> ## Acesso ao Sistema

#### Para acessar é necessário:

- Ter instalado em sua máquina o PHP 7.0.0 ou versão superior: <a href="https://www.php.net/downloads">Download PHP</a>.

- Clonar este repositório em sua máquina:

```
https://github.com/MonalyzaLima/web2-2021.1-1
```

- Abra o diretório do projeto

```
  cd web2-2021.1
```

- Selecione a branch Projeto1-1Unidade

```
  git checkout projetoII-backend
```

- Instale as dependencias

```
   composer install
```

- Por fim, execute os seguintes comandos no terminal:

```
  # Adiciona todas as permissões na pasta storage
  $ chmod -R 777 storage 
  # Gera a chave da aplicação
  $ php artisan key:generate 
  # Cria um link simbólico entre as pastas /public/storage -> /storage/app/public
  $ php artisan storage:link
  # Cria todas as tabelas do banco de dados SQL
  $ php artisan migrate
  # Cria um servidor em sua localhost na porta 8000 a partir do próprio php
  $ php -S localhost:8000 public/index.php

```
