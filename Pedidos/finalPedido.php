<?php
  session_start();
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Finalizar pedido</title>

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">
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
<br>
<div class="container pb-5">
  <main>
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Tu Carrito</span>
          <span class="badge bg-primary rounded-pill"><?php echo $_SESSION["n"]?></span>
        </h4>
        <ul class="list-group mb-3">
        <?php
                //Inicia ciclo for de los productos
                $total=0;
                for($i=0; $i<$_SESSION['n2']; $i++)
                {
                ?>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $_SESSION["carrito2"][$i][0]?> de <?php echo $_SESSION["carrito2"][$i][1]?></h6>
              <small class="text-body-secondary"><?php echo $_SESSION["carrito2"][$i][2]?> <?php echo $_SESSION["carrito2"][$i][3]?></small>
            </div>
            <span class="text-body-secondary">$<?php echo $_SESSION['carrito2'][$i][4]*$_SESSION['carrito2'][$i][5]?></span>
          </li>
                <?php
                $total=$total+$_SESSION['carrito2'][$i][4]*$_SESSION['carrito2'][$i][5];
                }?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Envió</span>
            <?php
            if($total>=50){
              $envio=0;
              echo "$$envio";
            }
            else{
              $envio=50;
              echo "$$envio";
            }
            ?>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (MXN)</span>
            <strong>$<?php $total=$total+$envio; echo $total?></strong>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos del pedido</h4>
        <form class="needs-validation" action="funcionesPedidos.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION["nombre"]?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="<?php echo $_SESSION["correo"]?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección principal</label>
              <input type="text" class="form-control" id="address" value="<?php echo $_SESSION["direccion"]?>" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <hr class="my-4">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="rbDir" id="rbDir" checked>
            <label class="form-check-label" for="rbDir">
                La dirección de envió es la misma que la dirección principal.
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="rbDir" id="rbDir2">
            <label class="form-check-label" for="rbDir2">
              Utilizar otra dirección de envió.
            </label>
            </div>
            <hr class="my-4">

            <div class="col-md-5">
              <label for="country" class="form-label">Estado</label>
              <select class="form-select" id="comboEstado" name="comboEstado" required disabled>
                <option value="">Seleccione...</option>
                <option>Jalisco</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Ciudad</label>
              <select class="form-select" id="comboCiudad" name="comboCiudad" required disabled>
                <option value="">Seleccione...</option>
                <option>Ciudad Guzman</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Codigo Postal</label>
              <input type="number" class="form-control" id="txtCp" name="txtCp" placeholder="" maxlength="5" required disabled>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="txtDir" name="txtDir" placeholder="1234 Main St" disabled required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
          </div>
          <hr class="my-4">
          <input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $total?>">
          <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="alert('!PEDIDO REALIZADO!. \n Puedes ver tus pedidos en ->Perfil ->Mis Pedidos')">Finalizar Pedido</button>
        </form>
      </div>
    </div>
  </main>

  <!--<footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2017–2023 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>-->
  
</div>
<div class="pt-3">
    <?php
        include "../Layouts/footer.php";
    ?> 
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="finalPedido.js"></script>
</html>
