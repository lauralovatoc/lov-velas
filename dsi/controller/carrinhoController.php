<?php
session_start();
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if($_REQUEST['cod'] && $_REQUEST['cod']=="delete"){
    $idvela = $_REQUEST['id'];

            foreach ($_SESSION['carrinho'] as $i => $vela) {
                if ($vela['id_vela'] == $idvela) {
                    unset($_SESSION['carrinho'][$i]);
                    break;
                }
            }
    header('location:../carrinho.php');
}

if($_REQUEST['cod'] && $_REQUEST['cod']=="adicionar"){
    $idvela = $_REQUEST['id'];
            $quantidadeAtual = $_REQUEST['quant'];

            if ($quantidadeAtual > 0) {
                foreach ($_SESSION['carrinho'] as &$vela) {
                    if ($vela['id_vela'] == $idvela) {
                        $vela['quantidade'] = $quantidadeAtual;
                    }
                }
            }
            header('location:../carrinho.php');
            exit;
    
}

if ($_POST) {
    if(isset($_SESSION['login']) && isset($_POST['id_vela'])) {

        $carrinhoIdvelas = $_POST['id_vela'];
        $carrinhoNome = $_POST['nome'];
        $carrinhoValor = $_POST['valor'];
        $carrinhoCaminhoImg = $_POST['caminho_img'];
        $carrinhoQuantidade = $_POST['quantidade'];
        
        for ($i = 0; $i < count($carrinhoIdvelas); $i++) {
            $vela = [
                'id_vela' => $carrinhoIdvelas[$i],
                'nome' => $carrinhoNome[$i],
                'valor' => $carrinhoValor[$i],
                'caminho_img' => $carrinhoCaminhoImg[$i],
                'quantidade' => $carrinhoQuantidade[$i],
            ];
            
            
            $produtoAtual = false;
            foreach ($_SESSION['carrinho'] as &$item) {
                if ($item['id_vela'] == $vela['id_vela']) {
                    $item['quantidade'] += $vela['quantidade'];
                    $produtoAtual = true;
                    break;
                }
            } if (!$produtoAtual) {
                $_SESSION['carrinho'][] = $vela;
            }
        }
        header('location:../carrinho.php');
    }
}
