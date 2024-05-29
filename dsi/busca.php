<?php
if($_POST){
    require_once './controller/autenticationController.php';
    require_once './model/velasModel.php';
    require_once  './shared/header.php';
    echo('<br><br><br><br><br>');
   $pesquisar = $_POST['buscar'];
    
    $result = new velasModel();
    $listaBusca = $result->buscar($pesquisar);
    
    echo ('<div class="container"><div class="row">');
    
    if(empty($listaBusca)){
        echo ('<hr><div class="alert alert-success">');
        echo ('Nenhum produto encontrado!');
        echo ('</div><hr>');
    }else{
        echo '<h4>Produtos encontrados:</h4>';
        foreach($listaBusca as $as){
            echo('<div class="d-flex">');
            echo('<div class="col-md-4"><img class="img-compras" src="'.$as['caminho_img'].'"></div>');
            echo('<div class="col-md-6" style="text-align:left"><p><h6>'.$as['nome'].'</h6>');
            echo('R$'.$as['valor'].'</p></div>');
            
            echo('<form action="controller/carrinhoController.php" method="post">');
                    echo ('<div style="text-align:center"><input type="hidden" name="quantidade[]" value="1"/></div><br>');
                    echo('<input type="hidden" value="'.$as['id_vela'].'" name="id_vela[]">');
                    echo('<input type="hidden" value="'.$as['nome'].'" name="nome[]">');
                    echo('<input type="hidden" value="'.$as['caminho_img'].'" name="caminho_img[]">');
                    echo('<input type="hidden" value="'.$as['valor'].'" name="valor[]">');              
                    echo('<div style="text-align:center"><button type="submit" class="btn btn-editar"><span class="material-symbols-outlined">shopping_cart</span> Adicionar ao carrinho</button></div>');
            echo('</form>');  
            
            echo('</div><br><hr>');
        }
    }
    echo('</div></div>');
    require_once './shared/footer.php';
}