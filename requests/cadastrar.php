<?php

session_start();

require_once('./../classes/DAO/usuarioDAO.php');


$usuarioDAO = new usuarioDAO;

if($usuarioDAO->cadastroUsuario($_POST['nome'],$_POST['nomeCompleto'],$_POST['senha']))
   echo 1;
else
 echo 0;

?>