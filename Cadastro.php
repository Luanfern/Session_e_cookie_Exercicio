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
    <title>Cadastro</title>
</head>

<body>
    <h2>Cadastro</h2>
    <p>Digite o nome de usuario</p>
    <form method="POST" action="session.php">
        <input type="text" name="usuario">
        </br></br>
        <input type="radio" name="radio" id="Padrão" value="Padrão">
        <label for="Padrão">Padrão</label>
        </br>
        <input type="radio" name="radio" id="Administrador" value="Administrador">
        <label for="Administrador">Administrador</label>
        </br>
        <input type="submit" value="enviar">
    </form>

    <a href="login.php"> Ja possui cadastro ?</a>
</body>

</html>