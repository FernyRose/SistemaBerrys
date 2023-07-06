<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./main.scss">
    <title>Fruta</title>
    
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
    <div class="col-sm-4 pt-5 ps-1 shadow-lg">
        <div class="text-center pb-2 subtitulo">
          <h2 class="display-6">Registro de Fruta</h2>
        </div>
        <form class="row g-2 container-fluid" id="frm" method="POST">
                <div class="col-sm-md-lg-4 p-3">
                  <label for="inputNom" class="form-label lg p-2">Nombre</label>
                  <input type="text" placeholder="Nombre Fruta" class="form-control" id="inNom" name="nombre" maxlength="50" required>
                </div>
                <div class="row-2 text-center p-2">
                  <button class="btn btn-primary" type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Registrar">Agregar a la lista</button>
                </div>
        </form>
    </div>

    <div class="col ps-5 pt-5">
      <form action="" style="width: 90%">
        <div class="col">
                <table id="tablaPedidos" class="table table-bordered table-striped compact mb-0" style="width: 90%">
                  <thead>
                  <h3 class="display-8">Frutas Registradas</h3>
                  <tr class="m-5">
                      <th>idFruta</th>
                      <th>Nombre</th>
                  </tr>    
                  </thead>
                  <tbody id="addfruta">
                  <tr>
                          <th>1</th>
                        </tr> 
                  </tbody>
                </table> 

        </div>
      </form>
    </div>
      
    
  </div>       
    
    
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
</html>