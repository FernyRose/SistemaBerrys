<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="./main.scss">
      <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../Imagenes/tecnm.png">
      <style>
        .navbar-brand{
          width: 98vw;
          position: absolute;
          top: 0;
        }
        .navbar{
          text-shadow: #a4232c;
        }
        .navbar-brand img{
          display: block;
          margin: auto;
        }
        .carousel-inner{
          display: flex;
        }
        @media screen and (min-width: 568px) {
          
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
    
      <div
            class="p-0 text-center bg-image"
            style="
              background-image: url('../Imagenes/fondo2.jpg'); 
              backgorund-size: cover;
              min-height: 60vh;
            "
          >
        
      
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../Imagenes/tecnm.png"></a>
          <div class="collapse navbar-collapse m-x" id="top navbar">
            <div class="navbar-nav">
              <button type="button" class="btn btn-primary text-center">
                Sign up
              </button>
            </div>
          </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav m-auto  fs-3 text-dark">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="#">Disabled</a>
              </div>
            </div>   
        </div>
    </nav>
    <div class="contaner my-5">
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
                <h1 class="mb-3">Pedidos a toda la ciudad</h1>
                <h4 class="mb-3">As tu pedido ya</h4>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card2 mb-3 m-auto" style="max-width: auto; background-color: rgba(0, 0, 0, 0.1);">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../Imagenes/blueberries.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title 1</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
                <img src="../Imagenes/blue4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../Imagenes/ble3.png" alt="...">
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
                  <img src="../Imagenes/ble3.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/ble3.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/ble3.png" alt="...">
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
                  <img src="../Imagenes/ble3.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">8</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <div class="image-wrapper">
                  <img src="../Imagenes/ble3.png" alt="...">
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
</html>