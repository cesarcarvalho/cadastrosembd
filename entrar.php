<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        if($user == "admin" && $pass == "admin"){
            session_start();
            $_SESSION['login'] = $user;
            header('location:autorizado.php');
            exit();
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválida";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Cadastro de Usuários - Gestão</title>
    <style>
        body {
            background-image: url('imagens/fundo.jpg');
            background-repeat: no-repeat;
            background-size:100%;
            bottom: 0;
        }
    </style>

</head>

<body>

	<div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4" align="center">
                <h3>Sistema de Gestão Cadastral</h3>
                <h4>ACESSO</h4>
                <form method="post" class="form-group">
                    <input name="username" class="form-control" type="text" placeholder="Usuario" id="username">
                    <label for="exampleInputEmail1"></label>
                    <input name="password" class="form-control" type="password" placeholder="senha" id="password">
                    <br>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
                </form>
            </div>
        </div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
