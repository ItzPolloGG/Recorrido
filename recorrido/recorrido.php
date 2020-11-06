<?php include 'main/conecta.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">
     <link rel="stylesheet" type="text/css" href="css/preloader.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="js/jquery-3.5.1.min.js"></script>
     <title> Recorrido Virtual</title>
  </head>
  <body>
    <!-- inicia preloader de la pagina web -->
     <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
     </div>
     <!-- termina el preloader de la pagina web -->
    <!-- inicia el contenido de la web -->
     <div id="contenido">
       <!-- inicia barra de navegaciÃ³n -->
       <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top" id="menu">
          <a class="navbar-brand" href="#">
             <img src="img/recorrido.jpeg" alt="BorderLine">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="inicio" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="inicio">
          <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span class="icon-home"></span> Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-users"></span> Â¿Por que?</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#"><span class="icon-book"></span>Blog</a>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="servicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Conocenos
                 </a>
                 <div class="dropdown-menu" aria-labelledby="Conocenos">
                     <a class="dropdown-item" href="#">Areas</a>
                     <a class="dropdown-item" href="#">Laboratorios</a>
                     <a class="dropdown-item" href="#">Soporte</a>
                 </div>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-facebook"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-twitter"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="icon-bell"></i>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="icon-cog"></span>
               </a>
               <div class="dropdown-menu" aria-labelledby="opciones">
                   <a class="dropdown-item" href="#">Inicio SesiÃ³n</a>
                   <a class="dropdown-item" href="#">ConfiguraciÃ³n</a>
                   <a class="dropdown-item" href="#">Acerca de</a>
               </div>
            </li>

          </ul>
     </div>
</nav>
<!-- termina barra de navegaciÃ³n -->
<!-- inicia slider -->
<div id="slider" class="carousel slide" data-ride="carousel">
   <!-- elemnto son las lineas o puntos de navegacion -->
   <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
        <li data-target="#slider" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/uno.jpg" class="d-block w-100" alt="Slider1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Seguimos tus pasos</h5>
                 <p>Para que no te pierdas en tu primer dia</p>
            </div>
        </div>
        <div class="carousel-item">
             <img src="img/2.jpg" class="d-block w-100" alt="Slider2">
        </div>
        <div class="carousel-item">
             <img src="img/tres.jpg" class="d-block w-100" alt="Slider3">
             <div class="carousel-caption d-none d-md-block">
                 <h5>Sigue tu camino</h5>
                  <p>No hay porque tener miedo.</p>
             </div>
         </div>

    </div>
    <!-- flechas de slider -->
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Atras</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Siguiente</span>
    </a>
  </div>
<!-- termina slider -->
       <div class="container">
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.</p>
     </div>
  </div>
    <!-- termina el contenido de la web -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/preloader.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
