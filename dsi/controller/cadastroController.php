<?php
 
if($_POST){
    
    require_once '../model/usuarioModel.php';
    
    $nome_registrado = $_POST['nome'];
    $email_registrado = $_POST['email'];
    $senha_registrada = $_POST['senha'];
    
    $usuario = new usuarioModel();
    $usuario->cadastrar($nome_registrado,$email_registrado,$senha_registrada);
}
?>

