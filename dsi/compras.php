<?php

require_once './controller/autenticationController.php';
require_once './shared/header.php';
require_once './controller/pedidoController.php';
require_once './controller/velasController.php';

echo('<br><br><br><br><br>');
echo('<div style="margin:2px; padding:3px; text-align:center"><h3>Compras anteriores:</h3></div><br>');

$email = $_SESSION['login'];
$compras = mostrarCompras($email);

echo('<div class="container">');
echo('<div class="row"');

if(empty($compras)){
    echo ('<br><div class="alert alert-success">');
    echo ('Nenhuma compra antiga!');
    echo ('</div>');
} else{


foreach ($compras as $result) {
    echo('<div class="col-md-12">');
    
    echo('<div class="pedido"');
    echo('<p>Compra ' . $result['data_compra'] . ' | <b>Valor total:' . $result['valor_total'] . '</b></p>');
    if($result['status_pedido']==1){
        echo('<div class="alert alert-danger">Esperando confirmação do pedido!</div>');
    } else if($result['status_pedido']==2){
        echo('<div class="alert alert-success">Pedido confirmado!</div>');
    }
    echo('</div>');
    
    
    echo('<br><br>');
    echo('<div>');
    $id_pedido = $result['id_pedido'];
    $velas = idVelas($id_pedido);

    foreach ($velas as $as) {
        $result = loadById($as['id_vela']);
     
        echo('<div class="col-md-2" style="text-align:center">');
        echo('<img class="img-compras" src="'.$result->caminho_img.'">');
        echo('<p>'.$result->nome.' | R$'.$result->valor.',00 | Quantidade: '.$result->quantidade.'</p>');
        echo('</div>');
 
    }
    echo('<hr>');
    echo('</div>');
}
}

require_once './shared/footer.php';
?>
