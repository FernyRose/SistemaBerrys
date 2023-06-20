<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./main.scss">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
    
</head>
<body>
<?php
      include "../Layouts/nav2.php";
?>    
    <div class="container-fluid">  
      <form class="row g-3 mt-3 px-3" id="frm" method="POST">
        <div class="col-4 center">
          <label for="inputNom" class="form-label">Nombre</label>
          <input type="text" placeholder="Nombre Fruta" class="form-control" id="inNom" name="nombre" maxlength="50" required>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="button" id="btnAgregar" onclick="" name="Registrar">Agregar a la lista</button>
        </div>
      </form>
    </div>
      <center>
    <div class="container-fluid g-3 mt-3">
      <table id="tablaPedidos" class="table table-striped">
        <thead>
          <tr>
            <th>idFruta</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody id="addfruta">
                      
        </tbody>
      </table> 
    </div>
    </center>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
</html>