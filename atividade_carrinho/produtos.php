<?php
require_once './shared/header.php';
require_once './controller/produtoController.php';
require_once './model/produtoModel.php';

echo ('<br><br><br><br>');

                echo('<div class="container">');
                echo ('<div class="row"');  
                echo ('<br>');
                echo ('<h2 style="margin-left:30px; color:black; text-align:left">Produtos:</h2>');
                
                $produtos = new produtoModel();
                $listaProdutos = $produtos->loadAll();

                foreach($listaProdutos as $result){
                    
                    echo ('<div class="col-md-3">');
                    echo ('<img src="'.$result['img'].'" style="width:250px;height:250px;"/>');
                    echo('<h5 style="color:black;text-align:center;">'.$result['nome'].'</h5>');
                    echo('<p style="text-align:center;">R$'.$result['valor'].',00</p>');
                    
                    //echo('<form action="controller/carrinhoController.php" method="post">');
                    //echo('<input type="hidden" value="'.$result['id_produto'].'" name="['.$result['id_produto'].']">');
                    //echo('<input type="hidden" value="'.$result['nome'].'" name="['.$result['nome'].']">');
                    //echo('<input type="hidden" value="'.$result['img'].'" name="['.$result['img'].']">');
                    //echo('<input type="hidden" value="'.$result['valor'].'" name="['.$result['valor'].'"]">');
                    
                    echo ('<div style="text-align:center"><a class="btn btn-dark" href="controller/carrinhoController.php?idproduto='.$result['id_produto'].'&nome='.$result['nome'].'">Adicionar ao carrinho</a></div>');
                    //echo('<div style="text-align:center"><button type="submit" class="btn btn-dark">Adicionar ao carrinho</button></div>');
                    //echo('</form>');    
                    
                    echo ('<br><br>');
                    echo ('</div>');

                }
                
                echo ('</div>');
                echo('</div>');

                ?>
        <br><br> 

<?php
require_once './shared/footer.php';
?>