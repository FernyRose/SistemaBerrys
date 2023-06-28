<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
      include "../Layouts/nav2.php";
?> 
<form class="row g-4 container-fluid" id="frm" method="POST">
        <div class="col-md-4">
          <label for="comboFruta" class="form-label">Fruta</label>
          <select name="comboFruta" id="comboFruta">
            
          </select>
        </div>
        <div class="col-md-4">
          <label for="comboEspe" class="form-label">Especificacion</label>
          <select name="comboEspe" id="comboEspe">
            
          </select>
        </div>
        <div class="col-md-4">
          <label for="inCali" class="form-label">Calibre (Tamano)</label>
          <input type="text" class="form-control" id="inCali" name="inCali" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inCal" class="form-label">Calidad</label>
          <input type="text" class="form-control" id="inCal" name="inCal" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inNom" class="form-label">Nombre Presentacion</label>
          <input type="text" class="form-control" id="inNom" name="inNom" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inPre" class="form-label">Precio</label>
          <input type="text" class="form-control" id="inPre" name="inPre" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="inEx" class="form-label">Existencias</label>
          <input type="text" class="form-control" id="inEx" name="inEx" maxlength="50" required>
        </div>
          <button type="button" id="btnRegistrar" class="btn btn-danger" onclick="" name="Registrar">Registrar</button>
        </div>
      </form>
      <div class="container-fluid">
        <div class="col">
          <table id="tablaPre" class="table table-striped">
            <thead>
            <tr>
                <th>idPresentacion</th>
                <th>Nombre</th>
                <th>Fruta</th>
                <th>Calibre</th>
                <th>Calidad</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>Opciones</th>
            </thead>
            <tbody id="addPre">
                
            </tbody>
          </table> 
          <button type="button" class="btn btn-success" id="btnGuardar" onclick="" name="Registrar">Guardar</button>
        </div>
      </div>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPre.js"></script>
<script src="../DataTables/datatables.min.js"></script>
</html>