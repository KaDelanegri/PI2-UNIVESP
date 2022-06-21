<?php
session_start();

$_SESSION['curso'] = $_POST['curso'];
echo $_SESSION['curso'];

?>