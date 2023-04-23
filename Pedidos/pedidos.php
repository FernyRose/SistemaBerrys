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
          <select name="fruta" id="">
            <option value="">Selecciona una fruta</option>
            <option value="1">Arandano</option>
            <option value="2">frambuesa</option>
            <option value="3">Zarzamora</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Cantidad</label>
          <input type="number" class="form-control" id="inputDes" name="cp" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Precio</label>
          <input type="text" class="form-control" id="inputDes" name="ciudad" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Importe</label>
          <input type="text" class="form-control" id="inputDes" name="estado" maxlength="50" required>
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

</html>