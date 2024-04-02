<?php
require_once './shared/header.php'
?>
<div class="row">
    <div class="col-sm-12">
        <h2>Velas (produtos):</h2>
        
        <table id="velasTable" class="table table-bordered">
            <thead>
            <th>Vela</th>
            <th>Descrição</th>
            <th>Qauntidade</th>
            <th>Custo</th>
            <th>Valor</th>
            
            </thead>

            <!--corpo da tabela-->
            <tbody>
                <?php
                require_once './controller/velasController.php';
                $velasList = loadAll();
                foreach ($velasList as $velas) {
                    echo '<tr>';

                    echo '<td>';
                    echo $velas['nome'];
                    echo '</td>';

                    echo '<td>';
                    echo $velas['descr'];
                    echo '</td>';
                }

                $velas = loadById(10);
                echo $velas->getNome();
                echo '<hr>';
                echo $velas->getDescr();
                ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
            $('#velasTable').DataTable({

            });
        </script>
    </div>
</div>

<?php
require_once './shared/footer.php'
?>
