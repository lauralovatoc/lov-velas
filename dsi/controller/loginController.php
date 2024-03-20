<?php

if ($_POST) {
    $email = $_POST['email']; 
    $senha = $_POST['senha'];
            
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    $usuario->login($email,$senha);
} else {
    header('location:../index.php');
}

?>
