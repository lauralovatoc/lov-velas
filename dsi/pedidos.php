<?php
require_once './controller/adminAutentication.php';
require_once './shared/header.php';
require_once './controller/pedidoController.php';
?>

<main class="admin">
    <br><br><br><br><br><br><br>
<div class="row">
    <div class="col-sm-12">
        <h3 style="margin-left:30px">Pedidos:</h3>
        
        <table id="velasTable" class="table table-bordered">
            <thead>
            <th>Usuário</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Status</th>
            
            </thead>

            <!--corpo da tabela-->
            <tbody>
                <?php    
                $pedidos = loadPedidos();
                foreach ($pedidos as $as) {
                    echo '<tr>';
                    
                    echo '<td>';
                    echo $as['email'];
                    echo '</td>';

                    echo '<td>';
                    echo $as['valor_total'];
                    echo '</td>';
                    
                    echo '<td>';
                    echo $as['data_compra'];
                    echo '</td>';
                    
                    if ($as['status_pedido']==1){
                        echo '<td>';
                        echo('Esperando aprovação');
                        echo '</td>';
                        
                        echo '<td>';
                        echo '<a class="btn btn-excluir" href="controller/pedidoController.php?cod=aprovar&&pedido='.$as['id_pedido'].'">Aprovar</a>';
                        echo '</<td>';
                        
                    } else if ($as['status_pedido']==2){
                        echo '<td>';
                        echo('Pedido aprovado');
                        echo '</td>';
                    }

  
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
        
        <div class="footer">©2024</div>
        
    </div>
</div>
</main>
<?php
require_once './shared/footer.php'
?>
