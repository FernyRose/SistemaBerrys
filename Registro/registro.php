<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./main.scss">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Imagenes/tecnm.png">
    <title>Registrarse</title>
    <style>
      
      
      
      .container-fluid2{
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 25px;
      }
      .login{
        
        width: 860px;
        height: min-content;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 12px;
        background: #f8f8ff;
      }
      .login h1{
        font-size: 32px;
        margin-bottom: 25px;
        font: Arial;;
      }
      .login form{
        
      }
      .login form input{
        
        margin-top: 15px;
        max-width: auto;
      }
      .subtitulo{
        border-bottom: 0.1em solid #464649;
        
      }
      .h1{
        font-size: 45px;
        font-weight: 600;
      }
      body{
          font-family: 'Inter', sans-serif !important;
        }

    </style>
</head>
<body>
  <?php
        include "../Layouts/nav2.php";
  ?>
  
    <div class="container-fluid2">
      <div class="login shadow-lg">
        <div class="h1 text-center text-primary  p-1 subtitulo">Registrarse</div>
        <form class="row g-2 needs-validation" id="frm" method="POST" action="registrarCliente.php" novalidate>
            <div class="">    
                <div class="form-group row pt-3 gap-1">
                  <div class="col w-50 position-relative">
                    <label for="inputId" class="form-label gap-1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre completo"  id="inputId" name="nombre" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                  <div class="col w-50 position-relative">
                    <label for="inputDes" class="form-label">Diecciónr</label>
                    <div class="pl-0" style="margin-topt:15px;" >
                      <input type="text" class="form-control" placeholder="Domicilio"  id="inputDes" name="direccion" maxlength="50" required>
                    </div>
                    </div>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                </div>

                <div class="row pt-3">
                  <div class="col-md-4 w-50 position-relative">
                    <label for="inputDes" class="form-label">Código Postal</label>
                    <input type="number" class="form-control" placeholder="Codigo postal" id="inputDes" name="cp" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                  <div class="col-md-4 w- position-relative">
                    <label for="inputDes" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" placeholder="Ciudad" id="inputDes" name="ciudad" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>  
                  </div>
                </div>  

                <div class="row pt-3">
                  <div class="col-md-4  w-50 position-relative">
                    <label for="inputDes" class="form-label">Estado</label>
                    <input type="text" class="form-control" placeholder="Estado" id="inputDes" name="estado" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                  <div class="col-md-4 w-50 position-relative">
                    <label for="inputDes" class="form-label">Teléfono Personal</label>
                    <input type="number" class="form-control" placeholder="Telefono personal" id="inputDes" name="telp" maxlength="50" pattern="[0-9]" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 w-50 position-relative">
                    <label for="inputDes" class="form-label">Teléfono Empresa</label>
                    <input type="number" class="form-control" placeholder="Telefono de empresa" id="inputDes" name="tele" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                  <div class="col-md-4 w-50 position-relative">
                    <label for="inputDes" class="form-label">Años de servicio</label>
                    <input type="number" class="form-control" placeholder="Años de servicio"  id="inputDes" name="anos" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 w-50 gap-2 position-relative">
                    <label for="inputDes" class="form-label">Correo</label>
                    <input type="text" class="form-control" placeholder="Correo electrónico" id="inputDes" name="correo" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>
                  </div>
                  <div class="col-md-4 w-50 position-relative">
                    <label for="inputDes" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" id="inputDes" name="contrasena" maxlength="50" required>
                    <div class="invalid-tooltip">
                      Es necesario llenar este campo
                    </div>  
                  </div>
                </div>  
                <div class="d-flex flex-row align-items-center justify-content-center">
                  <div class="row pt-3">
                    <button type="submit" class="btn btn-success w-100" onclick="" name="Registrar">Registrarse</button>
                  </div>
                </div>
                <div class="invalid-tooltip">
                      Es necesario llenar este campo
                  </div>
            </div>    
        </form>
      </div> 
    </div>  
    <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
        })()
    </script>  
</body>
<div class="pt-5">
  <?php
      include "../Layouts/footer.php";
  ?> 
</div>
</html>