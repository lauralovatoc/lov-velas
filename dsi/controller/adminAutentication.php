<?php
session_start();
if(!isset($_SESSION['tipo_usuario'])){
    header('location:login.php?cod=172');
}

?>
