<?php
session_start();
if(!isset($_SESSION['tipo_usuario'])){
    header('location:index.php?cod=174');
} 

?>
