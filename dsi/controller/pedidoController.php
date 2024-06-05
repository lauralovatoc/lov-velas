<?php


@$cod = $_REQUEST['cod'];
    if (isset($cod)) {
    if ($cod == 'aprovar'){
    $pedidoAprovar = $_REQUEST['pedido'];
    require_once '../model/pedidoModel.php';
    $pedido = new pedidoModel();
    $pedido->aprovar($pedidoAprovar);

    }
}
 function mostrarCompras($email) {
     require_once './model/pedidoModel.php';
    $compras = new pedidoModel();
    $allCompras = $compras->mostrarCompras($email);

    return $allCompras;
}

function idVelas($id_pedido){
    require_once './model/pedido_velaModel.php';
    $velas = new pedido_velaModel();
    $velasInCompra = $velas->idVelas($id_pedido);

    return $velasInCompra;
}

function loadPedidos(){
    require_once './model/pedidoModel.php';
    $pedidos = new pedidoModel();
    $result = $pedidos->loadPedidos();
    
    return $result;
}