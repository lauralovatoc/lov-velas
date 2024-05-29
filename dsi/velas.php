<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';

require_once './controller/velasController.php';
echo ('<br><br><br><br><br>');
                echo('<div class="container">');
                 
                echo ('<div class="row"');  
                echo ('<br>');
                echo ('<h2 style="margin-left:30px; color:#9A4A70; text-align:left">Nossas velas:</h2>');
                $velas= loadAll();
                     foreach($velas as $result){
                    
                    echo ('<div class="col-md-3">');
                    echo ('<div style="text-align:center"><img src="'.$result['caminho_img'].'" style="width:250px;height:300px;"/></div><br><br>');
                    echo('<h5 style="color:#9A4A70;text-align:center;">'.$result['nome'].'</h5>');
                    echo('<p>'.$result['descr'].'</p>');
                    echo('<p><strong>R$'.$result['valor'].',00</strong></p>');
                    
                    echo('<form action="controller/carrinhoController.php" method="post">');
                    echo ('<div style="text-align:center"><input type="hidden" name="quantidade[]" value="1"/></div><br>');
                    
                    echo('<input type="hidden" value="'.$result['id_vela'].'" name="id_vela[]">');
                    echo('<input type="hidden" value="'.$result['nome'].'" name="nome[]">');
                    echo('<input type="hidden" value="'.$result['caminho_img'].'" name="caminho_img[]">');
                    echo('<input type="hidden" value="'.$result['valor'].'" name="valor[]">');
                    
                    echo('<div style="text-align:center"><button type="submit" class="btn btn-editar"><span class="material-symbols-outlined">shopping_cart</span> Adicionar ao carrinho</button></div>');
                    echo('</form>');    
                   
                    echo ('<br><br>');
                    echo ('</div>');

                }
                
                echo ('</div>');
                echo ('<br>');
                
                echo('</div>');

                ?>
        <br><br> 
        
        <div class="footer">©2024</div>
<?php
require_once './shared/footer.php'
?>
