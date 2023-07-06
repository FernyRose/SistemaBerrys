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

    <style>
      .subtitulo{
        border-bottom: 0.3em solid #F3C577;
      }
    </style>
</head>
<body>
  
<?php
      include "../Layouts/nav2.php";
?>
    <div class="container-fluid row">  
      
      <div class="col-sm-4 pt-5 ps-1 entrada shadow-lg">
        <div class="text-center pb-2 subtitulo">
          <h2 class="display-6">Registro de Especificacion</h2>
        </div>
        <form class="row g-4 container-fluid pt-5" id="frm" method="POST">
          <div class="row-4">
            <label for="comboFruta" class="form-label">Fruta</label>
            <div class="">
              <select name="comboFruta" id="comboFruta">
                
              </select>
            </div>
          </div>
          
          
            <div class="col-md p-3">
              <label for="inCali" class="form-label">Calibre (Tamano)</label>
              <input type="text" class="form-control pe-5" id="inCali" name="inCali" maxlength="50" required>
            </div>
            <div class="col-md p-3">
              <label for="inCal" class="form-label ps-2">Calidad</label>
              <input type="text" class="form-control" id="inCal" name="inCal" maxlength="50" required>
            </div>
            <div class="col-md-12 pt-3 text-center">
              <button type="button" id="btnRegistrar" class="btn btn-primary" onclick="" name="Registrar">Registrar</button>
            </div>
          
        </form>
      </div>

      <div class="col ps-5 pt-5">
          <form action="" style="width: 80%">
            <div class="col">
              <table id="tablaEsp" class="table table-bordered table-striped compact mb-0">
                <thead>
                  <h3 class="display-8">Especificaciones Registradas</h3>
                <tr class="m-5">
                    <th>idEspecificacion</th>
                    <th>Fruta</th>
                    <th>Calibre</th>
                    <th>Calidad</th>
                </thead>
                <tbody class="p-2"id="addEsp">
                    
                </tbody>
              </table> 
              <button type="button" class="btn btn-success" id="btnGuardar" onclick="" name="Registrar">Guardar</button>
            </div>
          </form>
      </div>  
    </div>  
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosEsp.js"></script>
<script src="../DataTables/datatables.min.js"></script>
</html>