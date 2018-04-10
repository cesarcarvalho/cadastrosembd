<?php
 
session_start(); //iniciamos a sessão que foi aberta
 
unset($_SESSION['login']); //limpamos as variaveis globais das sessões

/*aqui você pode redirecionar para uma determinada página*/
echo "<script>alert('Você saiu!'); document.location.href='entrar.php';</script>";
 
?>