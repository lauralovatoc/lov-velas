<?php
if($_POST){
    $valorTotal = $_POST['valorTotal'];
    $email = $_POST['email'];

    $velasList = $_POST['velas'];
    $quantidadesVelas = $_POST['quantidades'];
    
    if(isset($valorTotal, $email, $velasList, $quantidadesVelas)){
        
        require_once '../model/pedidoModel.php';
        $pedido = new pedidoModel();
        $pedido->setEmail($email);
        $pedido->setValor_total($valorTotal);
        $id_compra = $pedido->realizarCompra();

        
        require_once '../model/pedido_velaModel.php';
       
        $pedidovela = new pedido_velaModel();
        $pedidovela->insereProduto($velasList, $quantidadesVelas, $email, $id_compra);

        
        session_start();
        $_SESSION['carrinho'] = null;
        $_SESSION['carrinho'] = [];
        header('location:../carrinho.php?cod=espera');
    }
}