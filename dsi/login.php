<html>
    <head>
        <title>Pedidos</title>
        <meta charset="UTF-8">

        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <style>
            body {
                font-family: "Lato", sans-serif;
                background-color:#e8e7df;
            }
            
            input[type=text], input[type=password] {
                border: none;
            }

            .main-head{
                height: 150px;
                background: #24242c;
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
                    background-color: #24242c;
                }

                .login-form{
                    margin-top: 80%;
                }

                .register-form{
                    margin-top: 20%;
                }
            }

            .login-main-text{
                margin-top: 20%;
                padding: 60px;
                color: #fff;
                background-color: #24242c;
            }
            
            .btn-black{
                background-color: #24242c;
                color: #fff;
            }
        </style>
        
    </head>

    <body>
        <form method="post" action="">
            <div class="sidenav">
                <div class="login-main-text">
                    <h2>bla bla<br> Página de Login</h2>
                    <p>Cadastre-se ou faça um login aqui.</p>
                </div>
            </div>
            
            
            <div class="main">
                <div class="col-md-6 col-sm-12" style="padding:5%">
                    <div class="login-form">
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Digite seu email">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" placeholder="Digite sua senha">
                            </div>
                            
                            <br>
                            
                            <button type="submit" class="btn btn-black">Login</button>
                            <button type="submit" class="btn btn-secondary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </form>
    </body>
</html>