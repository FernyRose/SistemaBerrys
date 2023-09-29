<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="main.scss">
      <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../Imagenes/tecnm.png">
      <style>
        body{
          font-family: 'Inter', sans-serif !important;
         
        }
        .titulo{
          font-family: 'Satisfy', cursive !important;
          font-size: 550%;
          font-weight: 900;
          font-color: #000000;
          text-shadow: 3px 2px 1px #ffff;
        }
        
        .portada{
          font-family: 'Roboto Slab', serif !important;
          font-weight: 900 !important;
          font-size: 175% !important;
          color: #ebf4f5;
        }
        .subtitulo{
        border-bottom: 0.2em solid #F3C577;
        }
        .botonInicio{
          width: 15vw;
          position: left;
        }
        
        .carousel-inner{
          display: flex;
        }
        @media screen and (min-width: 468px) {
          
          .card{
            margin: 0 .5em;
            width: calc(100%/3);
          }
          .cards-wrapper{
            display: flex;
          }
          .image-wrapper{
            height: 22vw;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
          }

        }  
        @media screen and (max-width: 468px) {
          .card:not(:first-child){
            display: none;
          }
        }
        
        .image--wrapper img{
          max-width: 100%;
          max-height: 100%;
        }
      </style>
        
      <title>Inicio</title>
  </head>
  <body  class="bg-light">
      <?php
      error_reporting(0);
        if($_SESSION["usuario"]=="admin"){
          include "Layouts/navIndex.php";
        }
        else{
          include "Layouts/navIndex2.php";
        } 
      ?>  
      
            
      
          
          <!--<div class="row">
                  
                  <div
                  class="bg-image p-1 text-center rounded mb-1"
                  style="image: url('Imagenes/f14.png');height:27vh;width:200px;"
                >
                <div class="col p-1 bg-light d-flex flex-row align-items-center justify-content-center">
                    <img src="Imagenes/f14.png" alt="...">
                </div>
            </div> -->
            <section class="row p-1 bg-light d-flex flex-row align-items-center justify-content-center">
              
              <div class="row">
                <div class="col-12">
                  <div
                    class="bg-image text-center shadow-md rounded mb-2 img-responsive"
                    style="background-image: url('Imagenes/granjero.jpg');height:auto; width:auto;"
                  >
                    <img src="Imagenes/f14.png" alt="...">
                    <div class="row d-flex flex-row align-items-center justify-content-center">
                      <div class="col-10">
                        <br>
                        <br>
                        <h1 class="card-title text-decoration-underline p-3 titulo">Frutas de temporada</h1>
                        <br>
                        <br>
                        <br>
                        <p class="portada h4">
                          La mejor seleccion de frutas de toda la region.
                        </p>
                        <p class="portada  pb-5">
                          Entregamos en cualquier parte de la ciudad.
                        </p>
                      </div>
                  </div>
                </div>   
              </div>  
                
                
        
              
            </section> 
            <!--<div class="card2 mb-3 " style="background-image: url('../Imagenes/indexP1.jpg');">
                <div class="row g-0">
                  <div class="col-md-5">
                    <div class="card-body">
                      <br>
                      <br>
                      <br>
                      <h5> </h5>
                      <h1 class="card-title text-decoration-underline">Frutas de temporada</h1>
                      <br>
                      <p class="card-text fs-3">Compra la fruta de temporada mas fresca de toda la region.</p>
                      <p class="card-text fs-3">Realiza tu pedido y lo entrgamos en cualquier parte de la ciudad.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>-->
                  <!--<div class="col-md-7" style="background-color: rgba(0, 0, 0, 0);">
                    <img src="Imagenes/ff2.png" class="img-fluid rounded-start" alt="...">
                  </div>-->

                <!--</div>
              </div>
            </div>-->
          
        
          <div class="p-5 row-md-8 shadow-md bg-light">
          <h2 class="card-title p-3 subtitulo text-dark">La major selecion de frutas de la region!</h2>
              <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="cards-wrapper">
                      <div class="card">
                        <div class="img-fluid">
                          <img src="Presentaciones/imagenes/index/arandano.jpg" alt="Responsive image" style="height:100%; width:100%;">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text lead ">Clanche de Arandano.</p>
                          <a href="#" class="btn btn-primary">Ir a la Tienda</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="img-fluid">
                          <img src="Presentaciones/imagenes/index/aguacate.jpg" alt="Responsive image" style="height:100%; width:100%;">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text lead">Kilo de aguacate.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="img-fluid">
                          <img src="Presentaciones/imagenes/index/frambuesa.jpeg" alt="Responsive image" style="height:100%; width:100%;">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text lead">Kilo Frambuesa.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                    </div>
                    </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <div class="card">
                              <div class="image-wrapper">
                                <img src="Presentaciones/imagenes/index/manzanas.jpg" alt="Responsive image" style="height:100%; width:auto;">
                              </div>
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text lead">Kilo de Manzana.</p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="image-wrapper">
                                <img src="Presentaciones/imagenes/index/fresa.jpg" alt="Responsive image" style="height:100%; width:auto;">
                              </div>
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text lead">Kilo de Fresa</p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="image-wrapper">
                                <img src="Presentaciones/imagenes/index/pepino.jpeg" alt="Responsive image">
                              </div>
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text lead">Kilo de Pepino.</p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                          </div>
                        </div>
                        </div>
                      </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                        <div class="card">
                            <div class="image-wrapper">
                              <img src="Imagenes/berrieCaja.png" alt="Responsive image">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                          </div>
                          <div class="card">
                            <div class="image-wrapper">
                              <img src="Imagenes/ble3.png" alt="Responsive image">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                          </div>
                          <div class="card">
                            <div class="image-wrapper">
                              <img src="Imagenes/zarzamoraIndividual.png" alt="Responsive image">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title lead"></h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Comprar</a>
                          </div>
                        </div>  
                      </div> 
                    <!-- acaba aqui--> 
                  </div>
                </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
              </div>
          </div>
          
      </div>
    </div>    
  </body>
  <footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 p-2">
        <h5>Quienes somos?</h5>
        <p>Somos unas empresa orgullosamente Zapotlense, realizamos la venta de fruta a negocios chicos y medianos en toda la region sur de Jalisco.</p>
      </div>
      <div class="col-md-4 p-2">
        <h5>Contacto</h5>
        <p>Email: selectosdelsur@gmail.com</p>
        <p>Telefono: +52 (341)123-6846</p>
        <p>Domiclio: Quintanar, Ciudad Guzman, Jalisco, Mexico</p>
      </div>
      <div class="col-md-4 p-2">
        <h5>Colaboradores</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://www.facebook.com/ababormarisqueriabar/?locale=es_LA" target="_blank">Grupo A Babor</a></li>
          <br>
          <li class="list-inline-item"><a href="#">Grupo de Guzman</a></li>
          <br>
          <li class="list-inline-item"><a href="#">Meztiza</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
  <script type="text/javascript" src="Jquery/jquery-3.6.4.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>