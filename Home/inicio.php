<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="./main.scss">
      <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../Imagenes/tecnm.png">
      <style>
        .navbar-brand{
          width: 98vw;
          position: absolute;
          top: 0;
          bottom: 10px;
        }
        .navbar{
          text-shadow: #a4232c;
          

        }
        .navegacion{
          margin-right: 300px;
          margin-left: 300px;
          text-shadow: #a4232c;

        }
        .navbar-brand img{
          display: block;
          margin: auto;
        }
        .botonInicio{
          width: 15vw;
          position: left;
        }
        
        .carousel-inner{
          display: flex;
        }
        @media screen and (min-width: 568px) {
          
          .card{
            margin: 0 .5em;
            width: calc(100%/3);
            background-color: #F8F8FF;
          }
          .cards-wrapper{
            display: flex;
            
          }
          .image-wrapper{
            height: 22vw;
            display: flex;
            align-items: center;
            justify-content: center;
          }

        }  
        @media screen and (max-width: 567px) {
          .card:not(:first-child){
            display: none;
          }
        }
        
        .image--wrapper img{
          max-width: 100%;
          max-height: 100%;
        }
        .subtitulo{
        border-bottom: 0.3em solid #F3C577;
        }
      </style>
        
      <title>Inicio</title>
  </head>
  <body>
  <?php
      include "../Layouts/nav.php";
?>
    
    <div class="p-2">
      <h2>
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('../Imagenes/berrys3.jpg');
            height: 700px;
            width: 100%;
            margin-top: 45px;
            margin-bottom: 58px;
            
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Pedidos a toda la ciudad8</h1>
                <h4 class="mb-3">Has tu pedido ya</h4>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card2 mb-3 m-auto" style="max-width: auto; background-color: rgba(0, 0, 0, 0.1);">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../Imagenes/berrieCaja.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Caja de Zarzamora</h5>
                  <p class="card-text">Haz  pedidos de Arandanos desde 5 clanches hasta multiples cajas.</p>
                  <p class="card-text"><small class="text-muted">Pedidos a toda la Ciudad</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </h2>
    </div>

    <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="../Imagenes/fresaCaja.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../Imagenes/frambuesaClanche.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../Imagenes/ble3.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/clancheBerries.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/platanoIndividual.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/manzanaIndividual.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">6</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/ble3.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">7</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/zarzamoraIndividual.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">8</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/zarzamoraClanche.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">9</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
  </body>
  <script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>