<?php
session_start();
    
$nomeusuario = $_POST['usuario'];
$tipousuario = $_POST['radio'];

$_SESSION['usuario'] = $nomeusuario;
$_SESSION['perfil'] = $tipousuario;

header("Location:index.php");
?>