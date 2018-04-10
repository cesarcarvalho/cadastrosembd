<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Cadastro de Usuários - Gestão</title>
    <style>
    
    </style>

</head>

<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cadastro de Usuários</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="autorizado.php">Home</a></li>
            <li><a href="listar.php">Listar Usuários</a></li>
            <li><a href="cadastrar.php">Cadastrar Usuários</a></li>
            <li><a href="sair.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair do Sistema</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php include_once("seguranca.php"); ?><b>Bem Vindo(a)</b> 
            <?php
                echo $_SESSION['login'];
            ?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

	<div class="container">
        <h3>
            Cadastro de Usuários Sem Banco de Dados.
        </h3>
        <div class="row">
            <div class="col-md-6">
                <h2><a href="listar.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar Usuários Cadastrados</a></h2>
            </div>
            <div class="col-md-6">
                <h2><a href="cadastrar.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cadastrar Usuários</a></h2>
            </div>
        </div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
