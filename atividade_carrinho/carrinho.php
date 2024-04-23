<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
require_once './model/produtoModel.php';

echo '<h2>Carrinho</h2>';
    
@print_r($_SESSION['carrinho']);

echo '<br>';
$totalItensCarrinho = count($_SESSION['carrinho']);
$itensList = array(
    ["id_produto" => $_SESSION['carrinho']['id_produto'],
    "nome" => $_SESSION['carrinho']['nome']]
    );
@print_r($itensList);

foreach ($itensList as $value) {
    
    $produtoAtual = $value["id_produto"];
    $nomeProdutoAtual = $value["nome"];
    $totalProdutoAtual = 0;
    
    for($i = 0; $i < $totalItensCarrinho; $i++){
        if($produtoAtual== $itensList['id_produto'][$i]){
            $totalProdutoAtual++;
            
        } else if ($i>0) {
            if($produtoAtual==$itensList['id_produto'][$i-1]){
            echo 'O produto '.$nomeProdutoAtual. ' foi adicionado '. $totalProdutoAtual. ' vezes no carrinho.<br>';
            echo '<hr>';
        }}
    }
    //TODO fazewr a mini pagina do produto com a quantidade embaixo
    //TODO botao para tirar produtos ou esvaziar carrinho -> abort session ou funcao delete -> conectar o carrinho ao banco de dados
}



require_once './shared/footer.php';
?>