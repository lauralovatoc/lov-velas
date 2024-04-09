<?php
require_once './controller/adminAutentication.php';
?>

<html>
    <head>
        <title>Lov Velas Aromáticas</title>
        <meta charset="UTF-8">

        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       
        
        <style>
            *{
                font-family: "Poppins", sans-serif;  
            }
            
            body {
                background-color:#EED9E2;
            }

            input[type=text], input[type=password] {
                border: none;
            }

            .main-head{
                height: 150px;
                background: #9A4A70;
            }

            .sidenav {
                height: 100%;
                background-color: #000;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .main {
                padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {
                    padding-top: 15px;
                }
            }

            @media screen and (max-width: 450px) {
                .login-form{
                    margin-top: 10%;
                }

                .register-form{
                    margin-top: 10%;
                }
            }

            @media screen and (min-width: 768px){
                .main{
                    margin-left: 40%;
                }

                .sidenav{
                    width: 40%;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    background-color: #9A4A70;
                }

                .login-form{
                    margin-top: 50%;
                }

                .register-form{
                    margin-top: 20%;
                }
            }

            .login-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;
                background-color: #9A4A70;
            }

            .btn-black{
                background-color: #9A4A70;
                color: #fff;
            }
            
            .logo img {
                height:20% 
            }
        </style>

    </head>

    <body>
        <form method="post" action="./controller/velasController.php">
            <div class="sidenav">
                <div class="login-main-text">
                    <a class="logo" href="index.php"><img src="img/logo-escura.png"></a>
                    <h4>Inserir uma vela</h4>
                    <p>no sistema</p>
                </div>
            </div>


            <div class="main">
                <div class="col-md-6 col-sm-12" style="padding:5%">
                    <div class="login-form">
                        <form>
                            <input type="hidden" name="id" value="<?php echo @(isset($velasObject)? $velasObject->getId_vela():'') ?>">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" placeholder="Nome da vela" id="nome" name="nome">
                            </div>
                            
                            <div class="form-group">
                                <label>Descrição:</label>
                                <input type="text" class="form-control" placeholder="Descrição da vela" id="email" name="descr">
                            </div>
                            
                            <div class="form-group">
                                <label>Quantidade:</label>
                                <input type="number" class="form-control" placeholder="Quantidade em estoque" id="quantidade" name="quantidade">
                            </div>
                            
                            <div class="form-group">
                                <label>Custo:</label>
                                <input type="number" class="form-control" placeholder="Custo de produção" id="custo" name="custo">
                            </div>
                            
                            <div class="form-group">
                                <label>Valor:</label>
                                <input type="number" class="form-control" placeholder="Valor cobrado" id="valor" name="valor">
                            </div>
                            
                            <!-- receber em filefield-->
                            <div class="form-group">
                                <label>Caminho da imagem:</label>
                                <input type="number" class="form-control" placeholder="Caminho da imagem no pc" id="caminho_img" name="caminho_img">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-black">Inserir</button>
                       
                        </form>
                    </div>
                </div>
            </div>


        </form>
    </body>
</html>
