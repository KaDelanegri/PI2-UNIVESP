<?php

session_start();

require_once('./../classes/DAO/usuarioDAO.php');


$usuarioDAO = new usuarioDAO;


$nota = $usuarioDAO->notas($_SESSION['usuario']['idusuario']);
echo json_encode($nota);
 




?>