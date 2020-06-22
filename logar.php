<?php
session_start();

$confusuario = $_POST['confusuario'];

$nomeusuario = $_SESSION['usuario'];
$tipousuario = $_SESSION['perfil'];



if($confusuario == $nomeusuario){
    if(isset($_POST['check'])){
        setcookie('usuario',$nomeusuario, time()+60*60*20 );
        setcookie('perfil',$tipousuario, time()+60*60*20 );
    }
    header('Location:telainicial.php');
}else{
    header('Location:index.php');
}

?>