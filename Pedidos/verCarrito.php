<?php
    include "../Conexion/conexion.php";
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
    <style>
      .subtitulo{
        border-bottom: 0.1em solid #F3C577;
    }
    </style>
  </head>
  <body>

    <?php
    if(isset($_SESSION["usuario"])){
      if($_SESSION["usuario"]=="admin"){
        include "../Layouts/nav.php";
        }
    }
  
    include "../Layouts/nav2.php";
  

?>
  <div class="row p-3 d-flex flex-row align-items-center justify-content-center">
    <div class="col-11 p-5 shadow-lg">
      <main>
        <div class="container-fluid mb-3 py-3 px-3">
          <div class="row mb-3">
              <div class="col mb-3 rounded-3">
                  <table id="tablaPedidos" class="table table-bordered border-dark compact mb-0  table-hover caption-top rounded-3" style="width: 100%">
                      <thead>
                        <div class="pb-4">
                          <h3 class="col-2 display-6 pb-2 subtitulo">Mi Carrito</h3>
                        </div>
                      </thead>
                      <tr class=" table-dark">
                          <th>Presentación</th>
                          <th>Fruta</th>
                          <th>Calibre</th>
                          <th>Calidad</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Importe</th>
                          <th>Opciones</th>
                      </tr>    
                      <tbody id="addfruta" class=" border-dark">
                          <?php
                              if(isset($_SESSION["carrito2"])){
                                $impo=0;
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
                                      $impo=$impo+$_SESSION['carrito2'][$i][4]*$_SESSION['carrito2'][$i][5];
                                  }
                              }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row">
            <?php
            if(isset($impo)){
              if($impo>=50){
                echo"<div class='col'>
                <h4>Envio:$0</h4>
              </div>";
              }
              else{
                echo"<div class='col'>
                <h4>Envio:$50</h4>
              </div>";
              }
            }
            ?>
              <div class="col-sm-2">
                  <a type="button" href="vaciarCarrito.php" class="btn btn-danger" onclick="return delCar()">Vaciar carrito</a>
              </div>
              <?php
                if(isset($_SESSION["n"])){
                  if($_SESSION["n"]>0){
                    echo"<div class='col-sm-2'>
                    <a type='button' href='finalPedido.php' class='btn btn-primary'>Continuar Pedido</a>
                    </div>";
                  }
                }
              ?>
          </div>
        </div>
        <script>
          function delCar(){
                let res=confirm("Esta seguro de eliminar todos los productos del carrito?");
                if(res==true){
                  return true;
                }
                else{
                  return false;
                }
          }
        </script>
      </main>
      </div>
  </div>    
</body>
<div class="fixed-bottom">
    <?php
        include "../Layouts/footer.php";
    ?> 
</div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="metodosPedidos.js"></script>
</html>
