<!DOCTYPE html>
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
          <label for="inputDes" class="form-label">Cantidad (clanche)</label>
          <select name="cantidad" id="inCantidadClanche">
            <option value="0" selected>Selecciona una cantidad</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Cantidad (cajas)</label>
          <select name="" id="inCantidadCaja">
            <option value="0" selected>Selecciona una cantidad</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Precio</label>
          <input type="text" class="form-control" id="inPrecio" disabled name="ciudad" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Importe</label>
          <input type="text" class="form-control" id="inImporte" name="estado" maxlength="50" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-danger" onclick="" name="Registrar">Agregar a la lista</button>
        </div>
      </form>
      <form action="">
        <div class="col-md-4">
          <table>
            <tr>
                <th>Fruta</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Importe</th>
            </tr>
          </table> 
          <button type="submit" class="btn btn-success" onclick="" name="Registrar">Guardar</button>
        </div>
      </form>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>