<?php

session_start();

session_destroy();

setcookie('usuario', '', time()-10);

header('Location:index.php');
?>