<?php

session_start();
if(!isset($_SESSION['usuario_foca'])){
    header("location:login.php");
    die();
}

?>

Pagina solo accedida si hay un usuario logueado

:D
<br>
<a href="logout.php">Cerrar sesion</a>