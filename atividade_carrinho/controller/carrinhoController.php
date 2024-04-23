<?php
require_once '../model/produtoModel.php';

if($_REQUEST['idproduto']& $_REQUEST['nome']){
    $id_produto = $_REQUEST['idproduto'];
    $nome = $_REQUEST['nome'];
   

    @session_start();
    if(!isset($_SESSION['carrinho'])){
        $itens = array(); 

    }else{
        $itens = $_SESSION['carrinho'];
    }

        $itens = array(
            "id_produto" => $id_produto,
            "nome" => $nome
        );

 
    $_SESSION['carrinho'] = array(
        ["id_produto" => $itens['id_produto'],
        "nome" => $itens['nome']]
    );

    echo 'Produto '.$nome.' adicionado!';
    
    header('location:../carrinho.php?nome='.$nome.'');
}