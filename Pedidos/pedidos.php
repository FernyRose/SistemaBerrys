<!DOCTYPE html>
    <?php 
      $_SESSION['n']=0;
      $arreglo[][]=0;
      $_SESSION['carrito']=$arreglo;
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="row g-4 container-fluid" id="frm" method="POST" action="registrarCliente.php">
        <div class="col-md-4">
          <label for="inputId" class="form-label">idPedido</label>
          <input type="text" class="form-control" id="inputId" name="nombre" maxlength="20" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">fruta</label>
          <select name="fruta" id="infruta">
            <option value="0" selected>Selecciona una fruta</option>
            <option value="1">Arandano</option>
            <option value="2">frambuesa</option>
            <option value="3">Zarzamora</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inConcepto" class="form-label">Concepto</label>
          <input type="radio" name="concepto" id="inClanche">Clanche
          <input type="radio" name="concepto" id="inCaja">Caja
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Cantidad</label>
          <select name="cantidad" id="inConcepto">
            
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Precio Caja</label>
          <input type="text" class="form-control" id="inPrecio1" name="ciudad" maxlength="50" required>
          <label for="inputDes" class="form-label">Precio Clanche</label>
          <input type="text" class="form-control" id="inPrecio2" name="" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inImporte" class="form-label">Importe</label>
          <input type="text" class="form-control" id="inImporte" maxlength="50" required value="0">
        </div>
        <div class="col-12">
          <button type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Registrar">Agregar a la lista</button>
        </div>
      </form>
      <form action="">
        <div class="col-md-4">
          <table id="tablaPedidos">
            <thead>
            <tr>
                <th>Fruta</th>
                <th>Precio</th>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Importe</th>
            </tr>
            </thead>
            <tbody id="addPedidos">

            </tbody>
          </table> 
          <button type="button" class="btn btn-success" id="btnGuardar" onclick="" name="Registrar">Guardar</button>
        </div>
      </form>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>