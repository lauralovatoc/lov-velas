<?php
session_start();
if($_SESSION['tipo_usuario']== 1){
    header('location:login.php?cod=174');
}
?>
