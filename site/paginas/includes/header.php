<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>SITE</title>

        <!--link bootstrap-->
        <link rel="stylesheet" href="site/plugins/bootstrap/css/bootstrap.min.css"/>

        <!--link do icomoon--> 
        <link rel="stylesheet" href="site/plugins/icomoon/icomoon.css.css"/>

        <!--link do css-->
        <link rel="stylesheet" href="site/css/stylo.css"/>
        
        

    </head>
    <body>
        <!--slides-->
        <header class="container">

            <!--slides-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="site/assets/img/site1.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="site/assets/img/site2.png" alt="Segundo Slide">
                    </div>
                   
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>
            <!--fim dos slides-->

            <!--barra de navegação-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><spam class="vic-home"></spam></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?pg=inicio-site">Inicio <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=sobre">Sobre <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=servicos">Serviços <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos">Produtos <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato-site">Contato <span class="sr-only">(página atual)</span></a></li> 

                    </ul>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="vic-person"></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="?pg=login">Login</a>
                            <a class="dropdown-item" href="?pg=contato">Contato</a>
                        </div>
                    </div>
                </div>



               
            </nav> 
            <!--fim da barra de navegação-->

        </header>
        <!--fim do header-->
