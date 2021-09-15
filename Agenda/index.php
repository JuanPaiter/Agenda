<?php
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilo-padrao.css">

    <title>Sistema Agendador 1.0</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/Agenda2.png" alt="Agenda" width="150">
            </a>       
                       
            
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
            <li class="nav-item">       <a class="nav-link" href="index.php?menuop=contatos">Contato</a></li>
            <li class="nav-item">       <a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
            <li class="nav-item">       <a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>

        </ul>        
        
        
        </div>
        </nav>
        </div>
    </header>
  <main>
      <div class="container">

<?php

$menuop=(isset($_GET["menuop"]))?$_GET["menuop"]:"home";

switch ($menuop) {
    case 'home':
        include("paginas/home/home.php");
        break;

        case 'contatos':
            include("paginas/contatos/contatos.php");
            break;
            case 'cad-contato':
                include("paginas/contatos/cad-contato.php");
                break;
                case 'inserir-contato':
                    include("paginas/contatos/inserir-contato.php");
                    break;
                    case 'editar-contato':
                        include("paginas/contatos/editar-contato.php");
                        break;
                        case 'excluir-contato':
                            include("paginas/contatos/excluir-contato.php");
                            break;
                        case 'atualizar-contato':
                            include("paginas/contatos/atualizar-contato.php");
                            break;
            case 'tarefas':
                include("paginas/tarefas/tarefas.php");
                break;
                case 'eventos':
                    include("paginas/eventos/eventos.php");
                    break;
        
    
    default:
       include("paginas/home/home.php");
        break;
}
?>
</div>
  </main>
  <footer class="container-fluid fixed-botton bg-dark">
      <div class="text-center">Agenda de Usuarios</div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>