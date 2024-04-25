<?php
require_once './controller/adminAutentication.php';
require_once './shared/header.php';
?>
<main class="admin">
    <br><br><br><br><br><br><br>
<div class="row">
    <div class="col-sm-12">
        <h3 style="margin-left:30px">Velas-produtos:</h3>
        
        <table id="velasTable" class="table table-bordered">
            <thead>
            <th>Imagem</th>
            <th>Vela</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
            
            </thead>

            <!--corpo da tabela-->
            <tbody>
                <?php
                require_once './controller/velasController.php';
                $velasList = loadAll();
                foreach ($velasList as $velas) {
                    echo '<tr>';
                    
                    echo '<td><img src="';
                    echo $velas['caminho_img'];
                    echo '" style="width:100px; height:125px"></td>';
                    
                    echo '<td>';
                    echo $velas['nome'];
                    echo '</td>';

                    echo '<td>';
                    echo $velas['descr'];
                    echo '</td>';
                    
                    echo '<td>';
                    echo $velas['quantidade'];
                    echo '</td>';
                    
                    echo '<td>';
                    echo $velas['valor'];
                    echo '</td>';
                    
                    
                   
                    //Operações
                    echo '<td>';
                        echo '<a class="btn btn-editar" href="inserirVelas.php?cod=edit&&id='.$velas['id_vela'].'">Editar</a>'; 
                    echo '</td>';
                    
                    echo '<td>';
                        echo '<a class="btn btn-excluir" href="controller/velasController.php?cod=del&&id_vela='.$velas['id_vela'].'">Excluir</a>';
                    echo '</<td>';
                    
                    echo '</tr>';
                }

                
                ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
            $('#velasTable').DataTable({

            });
        </script>
        <br>
        <div style="text-align:center"><a class="btn" id="btn-excluir" href="inserirVelas.php">Adicionar produto</a></div>
        <br><br> 
        
        <div class="footer">©2024</div>
        
    </div>
</div>
</main>
<?php
require_once './shared/footer.php'
?>
