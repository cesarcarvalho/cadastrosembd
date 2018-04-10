<?php
    if((empty($_SESSION['login']))){
        $_SESSION['loginErro'] = "Área Restrita";
        header("Location: entrar.php");
    }else{
        echo "<h6>Você está logado</h6> ";
    }
?>