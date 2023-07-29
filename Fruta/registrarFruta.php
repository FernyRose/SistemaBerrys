<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
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
      session_start();
      error_reporting(0);
      if($_SESSION["usuario"]=="admin"){
        include "../Layouts/nav.php";
      }
      else{
        include "../Layouts/nav2.php";
      }
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
                  <button class="btn btn-primary" type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Registrar">Registrar</button>
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
                      <th>Opciones</th>
                  </tr>    
                  </thead>
                  <tbody id="addfruta">
                  
                  </tbody>
                </table> 
        </div>
      </form>
    </div>
  </div>       
  <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Fruta</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="">
                  <label for="modalid" class="form-label lg p-2">idfruta</label>
                  <input type="text" class="form-control" id="modalid" name="nombre" maxlength="50" disabled>
      </div>
      <div class="">
                  <label for="modalInputNom" class="form-label lg p-2">Nombre</label>
                  <input type="text" placeholder="Nombre Fruta" class="form-control" id="modalInNom" name="nombre" maxlength="50" required>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" id="btnActualizar" data-target="" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<script>
  function modalName(num) {
        let nombre=document.getElementById(num);
        document.getElementById("modalInNom").value=nombre.getAttribute("data-btnNombre");
        document.getElementById("modalid").value=num; 
        let btnid=document.getElementById("btnActualizar");
  }
</script>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>