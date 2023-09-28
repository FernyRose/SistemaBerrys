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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Pedidos</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <style>
    body{
          font-family: 'Inter', sans-serif !important;
        }
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
  $r="SELECT p.nombrepresentacion, f.nombre, e.calibre, e.calidad, p.precio, p.img, p.idpresentacion, p.existencias FROM presentaciones AS p INNER JOIN
  especificaciones AS e ON p.idespecificacion=e.idespecificacion INNER JOIN fruta AS f
  ON p.idfruta=f.idfruta WHERE p.existencias>0";
   
?>
<div class="row pt-3 d-flex flex-row align-items-center justify-content-center">
    <div class="col-11 shadow-lg">
<main>
  
      <section class="py-1 d-flex flex-row align-items-center justify-content-center">
        <div class="row">
          <div class="col-12 ">
            <!-- Jumbotron -->
            <div
              class="img-fluid p-5 text-center shadow-1-strong rounded mb-5 text-white"
              alt="Responsive image"
              style="background-image: url('../Imagenes/campo.jpg'); height:100%; width:auto;"
            >
              <h1 class="mb-3 h2">Nuestra Tienda</h1>
              <p>Le ofrecemos diversos tipos de fruta en diferentes modos de presentacion, calidad, y calibre. Siempre cuidando la calidad que nos distingue.</p>
            </div>
            <!-- Jumbotron -->
          </div>
        </div>
        
      </section>
      <?php 
          if(!isset($_SESSION["usuario"]))
          { 
            echo"<p>Nota: Inicia sesion o registrate para comprar </p>";
          }
        ?>

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
                    $existencias=$row[7];
                    ?>
              <form action="agregarCarrito.php" method="POST" id="myForm">
                <div class='col'>
                  <div class='card shadow-sm'>
                  <img src='../Presentaciones/imagenes/<?php echo $img;?>'  width='100%' height='225' id='img1'>
                    <div class='card-body'>
                      <p class='card-text' id='txtPre'><?php echo $nombrePre;?> de <?php echo $nombreFruta; ?> calibre: <?php echo $calibre;?> Calidad: <?php echo $calidad;?>.</p>
                      <p>Existencias: <?php echo $existencias;?></p>
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
                      <h4 class='text-body-secondary' id='txPrecio'>Precio: $<?php echo $precio;?></h4>
                      <div class='d-flex justify-content-between align-items-center'>
                        <div class='btn-group'>
                          <?php
                            $bandera="0";
                            if(!isset($_SESSION["usuario"])){
                              echo"<button type='submit' class='btn btn-primary' id='btnAgregar' data-bs-toggle='modal' disabled>Agregar al carrito</button>";
                            }
                            else{
                              if(isset($_SESSION["carrito"])){
                                for($i=0; $i<$_SESSION['n']; $i++){
                                  if($_SESSION["carrito"][$i][0]==$idpre){
                                    $bandera="1";
                                  }
                                }
                                if($bandera=="1"){
                                  echo"<button type='submit' class='btn btn-success' id='btnAgregar' disabled>Agregado al carrito</button>";
                                }else{
                                  echo"<button type='submit' class='btn btn-primary' id='btnAgregar' onclick='return viewModal();'>Agregar al carrito</button>";
                                }
                              }else{
                                echo"<button type='submit' class='btn btn-primary' id='btnAgregar' onclick='return viewModal();'>Agregar al carrito</button>";
                              }
                            }
                          ?>
                        </div>
                        <small class='text-body-secondary' id='txPrecio'></small>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            <?php   
            }
            ?>            
          </div>
        </div>
      </div>
    

</main>
</div>   
</div>
<script>
              function viewModal(){
                let res=confirm("Agregar producto al carrito?");
                if(res==true){
                  return true;
                }
                else{
                  return false;
                }
              }
            </script>
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
