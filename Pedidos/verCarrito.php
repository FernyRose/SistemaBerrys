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
    <title>Mi carrito</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <body>

    <?php
  if(isset($_SESSION["usuario"])){
    if($_SESSION["usuario"]=="admin"){
    include "../Layouts/nav.php";
    }
  }
  else{
    include "../Layouts/nav2.php";
  }

?>

<main>
  <div class="container-fluid mb-3 py-3 px-3">
    <div class="row mb-3">
        <div class="col mb-3">
            <table id="tablaPedidos" class="table table-bordered table-striped compact mb-0" style="width: 90%">
                <thead>
                    <h3 class="display-8">Mi Carrito</h3>
                </thead>
                <tr class="">
                    <th>Presentacion</th>
                    <th>Fruta</th>
                    <th>Calibre</th>
                    <th>Calidad</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Importe</th>
                    <th>Opciones</th>
                </tr>    
                <tbody id="addfruta">
                    <?php
                        if(isset($_SESSION["carrito2"])){
                            for($i=0; $i<$_SESSION['n2']; $i++){
                                echo "<tr>
                                    <td>".$_SESSION['carrito2'][$i][0]."</td>
                                    <td>".$_SESSION['carrito2'][$i][1]."</td>
                                    <td>".$_SESSION['carrito2'][$i][2]."</td>
                                    <td>".$_SESSION['carrito2'][$i][3]."</td>
                                    <td><form id='frmCant' name='frmCant' method='POST' action='editarCarrito.php'>
                                    <input type='hidden' id='txtIndice' name='txtIndice' value='".$i."'>
                                    <input type='number' style='width:50px' id='txtCant' name='txtCant' value='".$_SESSION['carrito2'][$i][4]."'>
                                    <input type='submit' class='btn btn-primary' id='btnActualizar' name='btnActualizar' value='Actualizar'>
                                    </form></td>
                                    <td>$".$_SESSION['carrito2'][$i][5]."</td>
                                    <td>$".$_SESSION['carrito2'][$i][4]*$_SESSION['carrito2'][$i][5]."</td>
                                    <td><form id='frmBorrar' name='frmBorrar' method='POST' action='editarCarrito.php'>
                                    <input type='hidden' id='txtIndice2' name='txtIndice2' value='".$i."'>
                                    <input type='submit' class='btn btn-danger' id='btnBorrar' name='btnBorrar' value='Borrar'>
                                    </form>
                                    </td>
                                </tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <a type="button" href="vaciarCarrito.php">Vaciar carrito</a>
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
</body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="metodosPedidos.js"></script>
</html>
