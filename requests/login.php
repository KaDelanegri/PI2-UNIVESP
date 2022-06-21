<?php

session_start();

require_once('./../classes/DAO/usuarioDAO.php');


$usuarioDAO = new usuarioDAO;

$_SESSION['usuario'] =  $usuarioDAO->acessoUsuario($_POST['nome'],$_POST['senha']);

if($_SESSION['usuario'] == 0){
    $_SESSION['liberar'] = false;
    echo 0;
}
else if($_SESSION['usuario']['nome'] != ''){
    $_SESSION['liberar'] = true;
    echo 1;
}
  


?>