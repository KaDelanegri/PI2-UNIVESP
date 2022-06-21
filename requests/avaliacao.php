<?php

session_start();

require_once('./../classes/DAO/usuarioDAO.php');


$usuarioDAO = new usuarioDAO;

if($_POST['curso'] == 'algoritimo'){
    $nota = $usuarioDAO->notas($_SESSION['usuario']['idusuario']);
    
    if(empty($nota)){
        if($usuarioDAO->algoritimo($_POST['nota'],$_SESSION['usuario']['idusuario']))
        echo 1;
     else
      echo 0;
    }
    else{
        if($usuarioDAO->algoritimoput($_POST['nota'],$nota['idcursos']))
            echo 1;
        else
        echo 2;

        
    }
}

if($_POST['curso'] == 'javascript'){
    if($usuarioDAO->javascript($_POST['nota'],$_SESSION['usuario']['idusuario']))
    echo 1;
 else
  echo 0;
}

if($_POST['curso'] == 'html'){
    $nota = $usuarioDAO->notas($_SESSION['usuario']['idusuario']);
    
    if(empty($nota)){
        if($usuarioDAO->html($_POST['nota'],$_SESSION['usuario']['idusuario']))
        echo 1;
     else
      echo 0;
    }
    else{
        if($usuarioDAO->htmlput($_POST['nota'],$nota['idcursos']))
            echo 1;
        else
        echo 2;

        
    }
    
}

if($_POST['curso'] == 'css'){
    $nota = $usuarioDAO->notas($_SESSION['usuario']['idusuario']);
    
    if(empty($nota)){
        if($usuarioDAO->css($_POST['nota'],$_SESSION['usuario']['idusuario']))
        echo 1;
     else
      echo 0;
    }
    else{
        if($usuarioDAO->cssput($_POST['nota'],$nota['idcursos']))
            echo 1;
        else
        echo 2;

        
    }
    
}



?>