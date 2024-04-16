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
                    echo ('<img src="'.$result['caminho_img'].'" style="width:250px;height:300px;"/>');
                    echo('<h5 style="color:#9A4A70;text-align:center;">'.$result['nome'].'</h5>');
                    echo('<p>'.$result['descr'].'</p>');
                    echo('<p>R$'.$result['valor'].',00</p>');
                    
                    echo('<div style="text-align:center"><a href="carrinho.php" id="btn-editar" class="btn"><span class="material-symbols-outlined">shopping_cart</span> Adicionar</a></div>');
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
