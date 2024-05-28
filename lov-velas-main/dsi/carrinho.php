<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';

echo '<br><br><br><br>';
echo '<main class="container">';
echo '<br>';

@$cod = $_REQUEST['cod'];
            if (isset($cod)) {
                if ($cod == 'success') {  
                    echo ('<br><div class="alert alert-success">');
                    echo ('Compra realizada com sucesso.');
                    echo ('</div>');
                }
            }


$valorTotal = 0;
foreach ($_SESSION['carrinho'] as $vela) {
    $valorTotal += $vela['quantidade'] * $vela['valor'];
}

if (empty($_SESSION['carrinho'])) {
    echo ('<br><div class="alert alert-info">');
    echo ('Carrinho vazio!');
    echo ('</div>');
    
} else if (!empty($_SESSION['carrinho'])) {
    echo ('<div class="row">');
    foreach ($_SESSION['carrinho'] as $vela) {
        echo('<div class="col-md-3">');
        echo ('<div style="text-align:center"><img style="width:230px;height:250px;" src="./'.$vela['caminho_img'].'"></div>');
        echo'<br>';
        echo'<p><strong>'.$vela['nome'].'</strong></p>';

        echo ('<p>Quantidade: '.$vela['quantidade'].'</p>');
        echo '<p>Valor individual: R$'.$vela['valor'].',00</p>';
        $valorvelas = $vela['quantidade'] * $vela['valor'];
        echo '<p>Total: <strong>R$'.$valorvelas.',00</strong></p>';

        echo '<p><a id="add" href="controller/carrinhoController.php?cod=adicionar&&quant='.$vela['quantidade'] + 1 .'&&id='.$vela['id_vela'].'">'.$vela['quantidade'].' +</a></p>';
        
        echo '<div style="text-align:center"><a class="btn btn-editar" href="controller/carrinhoController.php?cod=delete&&id='.$vela['id_vela'].'">Excluir</a></div>';
        echo('</div>');
    }
    echo('</div>');
}
echo('<div>');
echo('<hr>');
echo('<p style="text-align:left">Valor da compra: <strong>R$' . $valorTotal . ',00</strong></p>');

echo('<form method="post" action="controller/fecharPedido.php">');

foreach ($_SESSION['carrinho'] as $vela) {
    echo ('<input type="hidden" name="velas[]" value="' . $vela['id_vela'] . '">');
    echo ('<input type="hidden" name="quantidades[]" value="' . $vela['quantidade'] . '">');
}
echo ('<input type="hidden" name="valorTotal" value="' . $valorTotal . '">');
echo ('<input type="hidden" name="email" value="' . $_SESSION['login'] . '">');

if(empty($_SESSION['carrinho'])){
    echo ('<a class="btn btn-excluir" href="velas.php">Comprar</a>');
} else {
    echo('<button class="btn btn-excluir" type="submit">Comprar</button>');
}
?>

<a class="btn btn-editar" href="controller/apagarCarrinho.php">Apagar carrinho</a>
</form> 
</div>
</main>

<?php
require_once 'shared/footer.php';
?>

