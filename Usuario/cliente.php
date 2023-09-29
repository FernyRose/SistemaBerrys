<div class="col-4" >
    <form action="actualizarCliente.php" method="POST" >
            <label for="txtNombre" class="form-label lg p-2">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" maxlength="50" value="<?php echo $_SESSION['nombre']?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtDir" class="form-label lg p-2">Direccion</label>
            <input type="text" class="form-control" id="txtDir" name="txtDir" maxlength="50" value="<?php echo $_SESSION["direccion"]?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtCp" class="form-label lg p-2">Codigo postal</label>
            <input type="number" class="form-control" id="txtCp" name="txtCp" maxlength="5" value="<?php echo $_SESSION["cp"]?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtCiudad" class="form-label lg p-2">Ciudad</label>
            <select class="form-select" id="txtCiudad" name="txtCiudad" required disabled>
                <option value="<?php echo $_SESSION["ciudad"]?>" selected><?php echo $_SESSION["ciudad"]?></option>
                <option value="Ciudad Guzman">Ciudad Guzman</option>
            </select>
        </div>
        <div class="col-4">
            <label for="txtEstado" class="form-label lg p-2">Estado</label>
            <select class="form-select" id="txtEstado" name="txtEstado" required disabled>
                <option value="<?php echo $_SESSION["estado"]?>" selected><?php echo $_SESSION["estado"]?></option>
                <option value="Jalisco">Jalisco</option>
            </select>
        </div>
        <div class="col-4">
            <label for="txtTel" class="form-label lg p-2">Telefono Personal</label>
            <input type="number" class="form-control" id="txtTel" name="txtTel" maxlength="10" value="<?php echo $_SESSION["tel"]?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtTelp" class="form-label lg p-2">Telefono Privado</label>
            <input type="number" class="form-control" id="txtTelp" name="txtTelp" maxlength="10" value="<?php echo $_SESSION["telp"]?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtCorreo" class="form-label lg p-2">Correo</label>
            <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" maxlength="50" value="<?php echo $_SESSION["correo"]?>" required disabled>
        </div>
        <div class="col-4">
            <label for="txtAs" class="form-label lg p-2">Años de servicio</label>
            <input type="number" class="form-control" id="txtAs" name="txtAs" maxlength="2" value="<?php echo $_SESSION["as"]?>" required disabled>
        </div>
        <div class="row">
            <div class="col-12 p-2 d-flex flex-row align-items-center justify-content-center">
                <div class="row">    
                    <div class="col p-4">
                        <input type="button" id="btnEditar" class="btn btn-success lg p-2" style=" width: 175px;" value="Editar" onclick="habilitarTxt()">
                    </div>
                    
                    <div class="col p-4 ">
                    <input type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary lg p-2" style=" width: 175px;" value="Guardar cambios" disabled>
                    </div>
                    <div class="col p-4">
                        <input type="button" class="btn btn-danger lg p-2" value="Cambiar Contrasena" style=" width: 175px;" data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    </div>
                </div>    
            </div>    
        </div>    
    </form>
    <script>
                        function habilitarTxt(){
                            document.getElementById("btnGuardar").disabled=false;
                            document.getElementById("txtNombre").disabled=false;
                            document.getElementById("txtDir").disabled=false;
                            document.getElementById("txtCp").disabled=false;
                            document.getElementById("txtCiudad").disabled=false;
                            document.getElementById("txtEstado").disabled=false;
                            document.getElementById("txtTel").disabled=false;
                            document.getElementById("txtTelp").disabled=false;
                            document.getElementById("txtCorreo").disabled=false;
                            document.getElementById("txtAs").disabled=false;
                            document.getElementById("txtContra").disabled=false;
                            
                        }
                    </script>
    <div style="border-bottom: 0.1em solid #050505;">

    </div>    

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Contrasena</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="">
                    <label for="txtActual" class="form-label lg p-2">Contrasena Actual</label>
                    <input type="text" class="form-control" id="txtActual" name="txtActual" maxlength="50" required>
                </div>
                <div class="">
                    <label for="txtNueva" class="form-label lg p-2">Nueva Contrasena</label>
                    <input type="text" class="form-control" id="txtNueva" name="txtNueva" maxlength="50" required>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnContra" data-target="" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </div>
            </div>
        </div>    
            <div class="container my-3 pt-5">
                <div class="row">
                    <div class="col">
                        <table id="tablaEsp" class="table table-bordered table-striped compact mb-0">
                            <div>    
                                <thead class="pb-5" >
                                    <div style=" border-bottom: 0.2em solid #F3C577;">
                                        <center>
                                        <h3 class="display-5">Mis Pedidos</h3>
                                        </center>
                                    </div>    
                                </thead>
                                <div class="pt-5">
                                    <tr class="">
                                        <th>idPedido</th>
                                        <th>Fecha del pedido</th>
                                        <th>Importe</th>
                                        <th>Direccion</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                    <tbody id="bodyPedido">

                                    </tbody>
                                </div>
                                </div>        
                        </table> 
                    </div>
                </div>
            </div>