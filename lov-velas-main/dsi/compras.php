<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
require_once './controller/pedidoController.php';

echo('<br><br><br><br><br>');
echo('<div style="margin:2px; padding:3px; text-align:center"><h3>Compras anteriores:</h3></div><br>'); 

$email = $_SESSION['login'];
$compras = mostrarCompras($email);

echo('<div class="container">');
echo('<div class="row"');

foreach($compras as $result){
    echo('<div class="col-md-12">');
    
    echo('<div class="pedido"');
    echo('<p>Compra '.$result['data_compra'].' | <b>Valor total:'.$result['valor_total'].'</b></p>');
    echo('</div>');
    
   
    $id_pedido = $result['id_pedido'];
    $velas = idVelas($id_pedido);
    
    require_once './controller/velasController.php';
    $id_vela = $velas['id_vela'];
    $velasList = loadById($id_vela);

    
    foreach($velasList as $produto){
        echo('<div class="col-md-3">');
        echo('<img href="'.$produto['caminho_img'].'"');
        echo('<h4>'.$produto['nome'].'</h4>');
        echo('<p>R$ '.$produto['valor'].',00</p>');
        echo('</div>');
    }
    //TO DO! mostrar atributos da vela pelo id pedido
}