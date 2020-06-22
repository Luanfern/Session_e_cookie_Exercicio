<?php
session_start();


if(isset($_COOKIE['usuario'])){
    $_SESSION['perfil'] = $_COOKIE['perfil'];
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
if(!isset($_SESSION['perfil'])){
header('Location:index.php');
}else{
echo 'olá! usuario '. $_SESSION['perfil'].'<br />';
echo $_SESSION['usuario'];
?>

<htm>

    <body>

        <a href="logout.php">Sair da conta</a>

    </body>

    </html>

    <?php
}
    ?>