<?php
require_once './shared/header.php';
?>

<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            @$cod = $_REQUEST['cod'];
            if (isset($cod)) {

                if ($cod == '174') {  
                    echo ('<br><div class="alert alert-danger">');
                    echo ('Apenas para usuários.');
                    echo ('</div>');
                }
            }
            ?>
            
            <h2>Nossos Best Sellers!</h2>
            <p>As velas mais vendidas da Lov</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="zoom">
                        <img class="best-seller" src="img/velas/vela-blueberry.jpeg">
                    </div>
                    <p>Vela Blueberry</p>
                </div>

                <div class="col-md-4">
                    <div class="zoom">
                        <img  class="best-seller" src="img/velas/vela-raspberry.jpg">
                    </div>
                    <p>Vela Raspberry</p>
                </div>

                <div class="col-md-4">
                    <div class="zoom">
                        <img class="best-seller" src="img/velas/vela-strawberry-choco.jpeg">
                    </div>
                    <p>Vela Strawberry Choco</p>
                </div>
            </div>
        </div>
    </div>    
    <br><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <h2>Nossos produtos</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-bamboo-forest.png" alt=""/>
                    </div>
                    <p>Vela Bamboo Forest</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-bday-cake.jpg" alt=""/>
                    </div>
                    <p>Vela Birthday Cake</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-blueberry.jpeg" alt=""/>
                    </div>
                    <p>Vela Blueberry</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-butter-waffles.jpeg" alt=""/>
                    </div>
                    <p>Vela Butter Waffles</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-cherry-blossom.png" alt=""/>
                    </div>
                    <p>Vela Cherry Blossom</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-choco.png" alt=""/>
                    </div>
                    <p>Vela Choco</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-coffee.jpeg" alt=""/>
                    </div>
                    <p>Vela Coffee</p>
                </div>

                <div class="col-md-3">
                    <div class="zoom">
                        <img src="img/velas/vela-donut.jpeg" alt=""/>
                    </div>
                    <p>Vela Donut</p>
                </div>
            </div>

            <center>
                <button style="border: 1px solid #9A4A70"><a style="text-decoration:none; color:#9A4A70" href="itens.php">Mostrar mais</a></button>
            </center>

        </div>

    </div>

    <br><br>
</div>
<div class="footer">©2024</div>
<?php
require_once './shared/footer.php';
?>