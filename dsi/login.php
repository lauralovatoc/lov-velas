<html>
    <head>
        <title>Lov Velas Aromáticas</title>
        <meta charset="UTF-8">

        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
        <form method="post" action="controller/loginController.php">
            <div class="sidenav">
                <div class="login-main-text">
                    <a class="logo" href="index.php"><img src="img/logo-escura.png"></a>
                    <h2>Login</h2>
                    <p>Faça login aqui.</p>
                </div>
            </div>


            <div class="main">
                <div class="col-md-6 col-sm-12" style="padding:5%">
                    <div class="login-form">
                        <form>
                            <div class="form-group">
                                <span class="material-symbols-outlined">person</span>
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Digite seu email" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <span class="material-symbols-outlined">lock</span>
                                <label>Senha</label>
                                <input type="password" class="form-control" placeholder="Digite sua senha" id="senha" name="senha">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-black">Login</button>

                            <br><br>

                            <div>
                                <a class="btn" href="cadastro.php" style="color:#9A4A70; text-decoration:none; background-color:white">Clique aqui para cadastrar-se!</a>
                            </div>

                            <div classs="d-grid">
                                <?php
                                //para verificar senha ou email

                                @$cod = $_REQUEST['cod'];
                                if (isset($cod)) {

                                    if ($cod == '171') {  //informações erradas
                                        echo ('<br><div class="alert alert-danger">');
                                        echo ('Verifique usuário ou senha.');
                                        echo ('</div>');
                                    } else if ($cod == '172') { //logout
                                        echo ('<br><div class="alert alert-danger">');
                                        echo ('Sua sessão expirou. Realize o login novamente.');
                                        echo ('</div>');
                                    }
                                }
                                ?>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </form>
    </body>
</html>
