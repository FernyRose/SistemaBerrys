<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Presentacion</title>

    <style>
      .subtitulo{
        border-bottom: 0.3em solid #F3C577;
      }
    </style>
</head>
<body>
<?php
      include "../Layouts/nav.php";
?> 

  <div class="container-fluid row">
    <div class="col-sm-4 pt-5 ps-1 shadow-lg">
      <div class="text-center pb-2 subtitulo">
            <h2 class="display-6">Registro de Presentacion</h2>
      </div>

      <form class="row g-4 container-fluid pt-5" id="frm" method="POST">
              <div class="col-6">
                <label for="comboFruta" class="form-label">Fruta</label>
                <select name="comboFruta" id="comboFruta">
                  
                </select>
              </div>
              <div class="col-6">
              <label for="comboEspe" class="form-label ps-3">Especificacion</label>
                <select name="comboEspe" id="comboEspe">
                    
                </select>
              </div>
              
              <div class="row p-3">
                <div class="col-md ps-2">
                  <label for="inCali" class="form-label">Calibre (Tamano)</label>
                  <input type="text" class="form-control" id="inCali" name="inCali" maxlength="50" required disabled>
                </div>
                <div class="col-md  ps-3">
                  <label for="inCal" class="form-label">Calidad</label>
                  <input type="text" class="form-control" id="inCal" name="inCal" maxlength="50" required disabled>
                </div>
              </div>

              <div class="row p-3">
                <div class="col-md-7">
                  <label for="inNom" class="form-label">Nombre Presentacion</label>
                  <input type="text" class="form-control" id="inNom" name="inNom" maxlength="50" required>
                </div>
                <div class="col-md">
                  <label for="inPre" class="form-label">Precio</label>
                  <input type="text" class="form-control" id="inPre" name="inPre" maxlength="50" required>
                </div>
              </div>
              <div class="row p-3">
                <div class="col-md-5">
                  <label for="inEx" class="form-label">Existencias</label>
                  <input type="text" class="form-control" id="inEx" name="inEx" maxlength="50" required>
                </div>
              </div>
              <div class="row pt-3 pb-4">  
                <button type="button" id="btnRegistrar" class="btn btn-primary" onclick="" name="Registrar">Registrar</button>
              </div>
      </form>
    </div>      
  

      <div class="col ps-5 pt-5" >
        <form action="" style="width: 80%">  
          <div class="col">
            <table id="tablaPre" class="table table-bordered table-striped compact mb-0" style="width: 50%">
              <thead>
              <h3 class="display-8">Presentaciones Registradas</h3>
              <tr class="">
                  <th>id</th>
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
          </div>
        </form>  
      </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Especificacion</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="">
                  <label for="modalid" class="form-label lg p-2">idPresentacion</label>
                  <input type="text" class="form-control" id="modalid" name="nombre" maxlength="50" disabled>
      </div>
      <div class="">
                  <label for="modalnombre" class="form-label lg p-2">Nombre</label>
                  <input type="text" class="form-control" id="modalnombre" name="nombre" maxlength="50" required>
      </div>
      <div class="">
                  <label for="modalprecio" class="form-label lg p-2">Precio</label>
                  <input type="text" class="form-control" id="modalprecio" name="nombre" maxlength="50" required>
      </div>
      <div class="">
                  <label for="modalexi" class="form-label lg p-2">Existencias</label>
                  <input type="text" class="form-control" id="modalexi" name="nombre" maxlength="50" required>
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
  function modalData(num) {
        let btn=document.getElementById(num);
        let nombre=btn.getAttribute("data-nombre");
        let precio=btn.getAttribute("data-precio");
        let exi=btn.getAttribute("data-exi");
        document.getElementById("modalnombre").value=nombre;
        document.getElementById("modalprecio").value=precio;
        document.getElementById("modalexi").value=exi;
        document.getElementById("modalid").value=num;
  }
</script>    
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPre.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>