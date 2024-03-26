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
        <style>
            *{
                font-family: "Poppins", sans-serif;  
            }
            body{
                background-color:white;
            }
            
            .navbar {
                background-color:#9A4A70;
                padding:15px;
            }
            
            .nav-link{
                color:white;
            }
            
            .nav-item{
              padding: 5px;
              margin: 5px;
            }

            .logo img {
                width: 55px;
                top:-22px;
                left: 10px;
            }
            
            h2, p {
                color:#702a4b;
                text-align:center;
            }
            
            .best-seller {
                width: 90%;
                height: 100%
            }
            
            .zoom {
                overflow: hidden;
            }

            .zoom img {
                max-width: 100%;
                -moz-transition: all 0.3s;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .zoom:hover img {
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }
            
            .footer {
                text-align:center;
                background-color: #F5D7E3;
                height: 10vh;
                color:#9A4A70;
                padding: 0;
                bottom: 0;
                width: 100%;
                height: 60px;
                line-height: 60px;
            }
           
        </style>
    </head>

    <body>
        
        <nav class="navbar navbar-expand-sm fixed-top">

            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li>
                        <a class="logo" href="index.php"><img src="img/logo-escura.png"></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="itens.php">Velas</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    
                    </li>
                    <?php
                    @session_start();
                    if ($_SESSION) {
                        echo('<li class="nav-item">
                        <a class="nav-link" 
                        style="text-decoration: none;"
                        href="controller/logoutController.php?cod=logout">Logout</a>
                        </li>');
                    }
                    ?>
                    
                    <li>
                        <?php
                    @session_start();
                    if ($_SESSION['tipo_usuario']==1) {
                        echo('<li class="nav-item">
                        <a class="nav-link" 
                        style="text-decoration: none;"
                        href="../adminPage.php?cod=admin">Admin</a>
                        </li>');
                    }
                    ?>

                    
                </ul>

                
                <span class="navbar-text">
                    <a class="nav-link" href="carrinho.php" style="color:white"><span class="material-symbols-outlined">shopping_cart</span> Carrinho</a>
                </span>
                
            </div>
        </nav>
        
