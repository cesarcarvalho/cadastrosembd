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
<?php

//PEGA
$nomeusuario = $_POST["nomeusuario"];
$email = $_POST["email"];
$datanascimento = $_POST["datanascimento"];
$sexo = $_POST["sexo"];

//PREPARA O CONTEÚDO A SER GRAVADO
$conteudo = "$nomeusuario,$email,$datanascimento,$sexo,\n";

//ARQUIVO TXT
$arquivo = "../cadastro_basico/bd/este.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a")) {
echo "Erro abrindo arquivo ($arquivo)";
exit;
}

//ESCREVE NO ARQUIVO TXT
if (!fwrite($abrir, $conteudo)) {
print "Erro escrevendo no arquivo ($arquivo)";
exit;
}

echo "Arquivo gravado com Sucesso !!";

//FECHA O ARQUIVO 
fclose($abrir); 

?>
    <br>
<a href="cadastrar.php">Voltar</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>    