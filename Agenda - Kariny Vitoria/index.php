<!DOCTYPE html>
<html lang="PT-Br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agenda Telefônica</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
</head>
<?php
include "config.php";

?>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Agenda</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=">Início</a></li>
          <li><a href="index.php?page=form_contato">Cadastrar</a></li>
          <li><a href="index.php?page=listar_contatos&contato=">Listar</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
          
        </div>
      </div>
    </nav>

<h2 align="center">Agenda Telefonica</h2>
    <div class="container">

      <?php 
      $page='';
      if( empty($_REQUEST['page'])){  
        ?>
        <div class="jumbotron">
        </div>
        <?php }else{
          $pagina = $_REQUEST['page'];
          include ($pagina.'.php');
        }
        ?>

      </div>

      <?php
      mysqli_close($con);

      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
