<?php

session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}
echo $_SESSION['id'] .'</br>';
echo $_SESSION['id_rol'];

if($_SESSION['id_rol'] == '4' || $_SESSION['id_rol'] == '3'){
    //instrucciones
};
?>
<br>
<br>
<br>
Pagina solo accedida si hay un usuario logueado

:D
<br>
<a href="logout.php">Cerrar sesion</a>