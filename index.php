<?php

if(isset($_COOKIE['usuario'])){
    $_SESSION['perfil'] = $_COOKIE['perfil'];
    $_SESSION['usuario'] = $_COOKIE['usuario'];
    header('Location:telainicial.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <p>Digite o nome de usuario</p>
    <form method="POST" action="logar.php">
        <input type="text" name="confusuario">
        </br></br>
        <input type="checkbox" id="check" name="check" value="1">
        <label for="check">Manter-me Conectado</label>
        <input type="submit" value="Logar">
    </form>
    <a href="Cadastro.php">Cadastrar</a>


</body>

</html>