<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="row g-4 container-fluid" id="frm" method="POST">
        <div class="col-md-4">
          <label for="inputNom" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="inNom" name="nombre" maxlength="50" required>
        </div>
          <button type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Registrar">Agregar a la lista</button>
        </div>
      </form>
      <form action="">
        <div class="col-md-4">
          <table id="tablaPedidos">
            <thead>
            <tr>
                <th>idFruta</th>
                <th>Nombre</th>
            </thead>
            <tbody id="addfruta">
                
            </tbody>
          </table> 
          <button type="button" class="btn btn-success" id="btnGuardar" onclick="" name="Registrar">Guardar</button>
        </div>
      </form>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
</html>