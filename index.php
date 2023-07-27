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
      </style>
        
      <title>Inicio</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php">
          <img src="Imagenes/Nlogo.png" width="170" height="40" class="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home/inicio.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catalagos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Fruta/registrarFruta.php">Frutas</a></li>
                <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="EspecificacionesFruta/registrarEsp.php">Especificaciones</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Presentaciones/registrarPre.php">Presentaciones</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedidos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="ConsultaPedidos/consultaPedidos.php">Pedidos pendientes</a></li>
                
                </ul>
              </li>
              <li class="nav-item dropdown">
                
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ayuda</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fa-solid fa-user"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
        </div>
      </nav>
    
    <div class="contaner p-5">
      <h2>
        
        

        <div class="card2 mb-3 m-auto" style="max-width: auto; background-color: rgba(0, 0, 0, 0);">
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
                  <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
              </div>
              <div class="col-md-7" style="background-color: rgba(0, 0, 0, 0);">
                <img src="Imagenes/ff2.png" class="img-fluid rounded-start" alt="...">
              </div>
            </div>
          </div>
        </div>
      </h2>
    
    <div class="p-5 row-md-8 shadow-lg">
        <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="cards-wrapper">
                <div class="card">
                  <div class="image-wrapper">
                    <img src="Imagenes/zarzamoraP.png" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="card">
                  <div class="image-wrapper">
                    <img src="Imagenes/frambuezaIndi.png" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="card">
                  <div class="image-wrapper">
                    <img src="Imagenes/arandanoIndi.png" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
              </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div class="card">
                        <div class="image-wrapper">
                          <img src="Imagenes/zarzamoraP.png" alt="...">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">4</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="image-wrapper">
                          <img src="Imagenes/zarzamoraP.png" alt="...">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">5</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="image-wrapper">
                          <img src="Imagenes/zarzamoraP.png" alt="...">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">6</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                  </div>
                </div>
              <div class="carousel-item">
                <div class="cards-wrapper">
                  <div class="card">
                      <div class="image-wrapper">
                        <img src="Imagenes/berrieCaja.png" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">7</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                    <div class="card">
                      <div class="image-wrapper">
                        <img src="Imagenes/ble3.png" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">8</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                    <div class="card">
                      <div class="image-wrapper">
                        <img src="Imagenes/zarzamoraIndividual.png" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">9</h5>
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
          <li class="list-inline-item"><a href="https://www.facebook.com/ababormarisqueriabar/?locale=es_LA">Grupo A Babor</a></li>
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