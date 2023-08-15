<?php
    include "../Conexion/conexion.php";
    session_start(); 
    ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./main.scss">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Pedidos</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <style>
    /*<h1 class="fw-light">Nuestra Tienda</h1>
        <p class="lead text-body-secondary">Le ofrecemos diversos tipos de fruta en diferentes modos de presentacion, calidad, y calibre. Siempre cuidando la calidad que nos distingue.</p>*/
  </style>
  <body>
    <?php
  error_reporting(0);
  if($_SESSION["usuario"]=="admin"){
    include "../Layouts/nav.php";
  }
  else{
    include "../Layouts/nav2.php";
  }
  $r="SELECT p.nombrepresentacion, f.nombre, e.calibre, e.calidad, p.precio, p.img, p.idpresentacion FROM presentaciones AS p INNER JOIN
  especificaciones AS e ON p.idespecificacion=e.idespecificacion INNER JOIN fruta AS f
  ON p.idfruta=f.idfruta";
   
?>
<div class="row pt-3 d-flex flex-row align-items-center justify-content-center"">
    <div class="col-11 shadow-lg">
<main>
  
      <section class="py-1 d-flex flex-row align-items-center justify-content-center">
        <div class="row-8">
          <div class="col-8 ">
            <!-- Jumbotron -->
            <div
              class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
              style="background-image: url('../Imagenes/campo.jpg');height:70vh;width:1400px;"
            >
              <h1 class="mb-3 h2">Nuestra Tienda</h1>

              <p>
              Le ofrecemos diversos tipos de fruta en diferentes modos de presentacion, calidad, y calibre. Siempre cuidando la calidad que nos distingue.
              </p>
            </div>
            <!-- Jumbotron -->
          </div>
        </div>
      </section>

      <div class="album py-3 bg-body-tertiary">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
                $comando= mysqli_query($enlace, $r);
                while($row=mysqli_fetch_array($comando)){
                    $nombrePre=$row[0];
                    $nombreFruta=$row[1];
                    $calibre=$row[2];
                    $calidad=$row[3];
                    $precio=$row[4];
                    $img=$row[5];
                    $idpre=$row[6];
                    $existencias;
                    ?>
              <form action="agregarCarrito.php" method="POST">
                <div class='col'>
                  <div class='card shadow-sm'>
                  <img src='../Presentaciones/imagenes/<?php echo $img;?>'  width='100%' height='225' id='img1'>
                    <div class='card-body'>
                      <p class='card-text' id='txtPre'><?php echo $nombrePre;?> de <?php echo $nombreFruta; ?> calibre: <?php echo $calibre;?> Calidad: <?php echo $calidad;?>.</p>
                      <div class="input-group mb-3">
                      <label for="comboCant" class="input-group-text">Cantidad</label>
                      <select name="comboCant" id="comboCant" class="form-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                      </div>
                      <input type="hidden" name="txtIdpre" id="txtIdpre" value="<?php echo $idpre;?>">
                      <input type="hidden" name="txtNomPre" id="txtNomPre" value="<?php echo $nombrePre;?>">
                      <input type="hidden" name="txtFruta" id="txtFruta" value="<?php echo $nombreFruta;?>">
                      <input type="hidden" name="txtCalibre" id="txtCalibre" value="<?php echo $calibre;?>">
                      <input type="hidden" name="txtCalidad" id="txtCalidad" value="<?php echo $calidad;?>">
                      <input type="hidden" name="txtPrecio" id="txtPrecio" value="<?php echo $precio;?>">
                      <div class='d-flex justify-content-between align-items-center'>
                        <div class='btn-group'>
                          <button type='submit' class='btn btn-primary' id='btnAgregar'>Agregar al carrito</button>
                        </div>
                        <small class='text-body-secondary' id='txPrecio'>Precio: $<?php echo $precio;?></small>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            <?php   
            }
            ?>
            <script>
              function getButton(boton){
                let butt=document.getElementById(boton);
                butt.setAttribute("id", "btnAgregar");
                console.log(butt.getAttribute("id"));
              }
            </script>
          </div>
        </div>
      </div>
    

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
</div>   
</div>
</body>
<div class="pt-3">
    <?php
        include "../Layouts/footer.php";
    ?> 
</div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="metodosPedidos.js"></script>
</html>
