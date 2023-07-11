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
      include "../Layouts/nav.php";
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
                    <th>Opciones</th>
                </thead>
                <tbody class="p-2"id="addEsp">
                    
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
                  <label for="modalid" class="form-label lg p-2">idEspecificacion</label>
                  <input type="text" class="form-control" id="modalid" name="nombre" maxlength="50" disabled>
      </div>
      <div class="">
                  <label for="modalcalibre" class="form-label lg p-2">Calibre</label>
                  <input type="text" class="form-control" id="modalcalibre" name="nombre" maxlength="50" required>
      </div>
      <div class="">
                  <label for="modalcalidad" class="form-label lg p-2">Calidad</label>
                  <input type="text" class="form-control" id="modalcalidad" name="nombre" maxlength="50" required>
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
        let calibre=btn.getAttribute("data-calibre");
        let calidad=btn.getAttribute("data-calidad");
        document.getElementById("modalcalibre").value=calibre;
        document.getElementById("modalcalidad").value=calidad;
        document.getElementById("modalid").value=num;
  }
</script>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosEsp.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>