<?php
    require_once 'global.php';
    session_start();

    $cliente = new Cliente();
    $lista = $cliente->listar();

    $achou = false;

    foreach ($lista as $linha){ 
        if (($_SESSION['login-session'] == $linha['emailcliente']) &&
            ($_SESSION['senha-session'] == $linha['rgcliente']))
            $achou = true;
    }

    if(!$achou){
        header("Location: index.php");
    }
        
?>