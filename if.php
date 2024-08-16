<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PW 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
            Pagina Inicial
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">Variavel
            
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="if.php">
            If
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="bootstrap.php">
            Bootstrap
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "
          >Disabled
        </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">

    <h1> Estrutura condicional (IF ELSE)</h1>

    <p>$inteira = 10</P>
    <p>$inteira = "prof"</P>
    <p>$valor = 10.50</P>
    <p>$ativo = true</P>

    <pre> if($inteira == 10)
        {
            echo "o conteudo é 10";
        }
        else if($inteira >= 11)
        {
            echo "maior ou igual a 11";
        }
        else
        {
            echo "não é 10";
        }
    </pre>
         <?php 
          $inteira = 10;
          if($inteira == 10)
          {
              echo "<h2>A variavel é 10</h2>";
          }
          else if($inteira >= 11)
          {
              echo "<h2>A variavel é maior ou igual a 11 </h2>";
          }
          else
          {
              echo "<h2>A variavel é menor que 10 </h2>";
          }
         ?>


    <p>
        As variaveis strings podem ser contados os caracteres e usados no if
    </p>
    <pre>
        if( count($nome) > 10)
        {
            echo "Seu nome tem mais que 10 caracteres";
        }
    </pre>
         <?php
           $nome = "Tayna Adriana";
           if( strlen($nome) > 5)
           {
               echo "<h2>Seu nome tem mais que 10 caracteres, quantidade é ".strlen($nome)."</h2>";
           }          
         ?>
    <p>
        Podemos verificar se a variavel $nome está vazia
    </p>
    <pre>
        if( empty($nome) )
        {
            echo "Sua variavel está vazia";
        }
    </pre>
         <?php
             $nome = "bgdfsahjsdfg";
             if( empty($nome) )
             {
                 echo "<h2>Sua variavel está vazia</h2>";
             }
             else{
                 echo "<h2> Sua variavel contem algo $nome</h2>";
             }
         ?>
    <p>
        Também podemos comparar strings normalmente
    </p>
    <pre>
        if($nome == "Tayna")
        {
            echo "Nome igual";
        }
        else
        {
            echo "Nomes diferentes";
        }
    </pre>
         <?php
            $nome = "Tayna";
             if($nome == "Tayna")
             {
                 echo "<h2>Nome igual</h2>";
             }
             else
             {
                 echo "<h2>Nomes diferentes</h2>";
             }
         ?>
    <p>
        Podemos verificar se a variavel é verdadeira ou falsa
    </p>
    <pre>
        if($ativo)
        {
            echo "Verdadeiro";
        }
        else
        {
            echo "Falso";
        }
    </pre>
         <?php
            $ativo = true;
           if($ativo)
           {
               echo "<h2>Verdadeiro</h2>";
           }
           else
           {
               echo "<h2>Falso</h2>";
           } 
         ?>
</div>


   <script src="bootstrap.bundle.min.js"></script>
</body>
</html>