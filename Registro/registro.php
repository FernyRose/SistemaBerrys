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
          <label for="inputId" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="inputId" name="nombre" maxlength="20" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="inputDes" name="direccion" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Codigo Postal</label>
          <input type="number" class="form-control" id="inputDes" name="cp" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="inputDes" name="ciudad" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Estado</label>
          <input type="text" class="form-control" id="inputDes" name="estado" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Telefono Personal</label>
          <input type="numberf" class="form-control" id="inputDes" name="telp" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Telefono Empresa</label>
          <input type="number" class="form-control" id="inputDes" name="tele" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Años de servicio</label>
          <input type="number" class="form-control" id="inputDes" name="anos" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Correo</label>
          <input type="text" class="form-control" id="inputDes" name="correo" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inputDes" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="inputDes" name="contrasena" maxlength="50" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-danger" onclick="" name="Registrar">Registrar</button>
        </div>
      </form>
</body>
</html>