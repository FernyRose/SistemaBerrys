
    <div class="col-4">
        <form action="actualizarCliente.php" method="POST">
                <label for="txtNombre" class="form-label lg p-2">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" maxlength="50" value="<?php echo $_SESSION['nombre']?>" disabled>
            </div>
            <div class="col-4">
                <label for="txtDir" class="form-label lg p-2">Direccion</label>
                <input type="text" class="form-control" id="txtDir" name="txtDir" maxlength="50" value="<?php echo $_SESSION["direccion"]?>" disabled>
            </div>
            <div class="col-4">
                <label for="txtCp" class="form-label lg p-2">Codigo postal</label>
                <input type="text" class="form-control" id="txtCp" name="txtCp" maxlength="50" value="<?php echo $_SESSION["cp"]?>" disabled>
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
                <input type="text" class="form-control" id="txtTel" name="txtTel" maxlength="50" value="<?php echo $_SESSION["tel"]?>" disabled>
            </div>
            <div class="col-4">
                <label for="txtTelp" class="form-label lg p-2">Telefono Privado</label>
                <input type="text" class="form-control" id="txtTelp" name="txtTelp" maxlength="50" value="<?php echo $_SESSION["telp"]?>" disabled>
            </div>
            <div class="col-4">
                <label for="txtCorreo" class="form-label lg p-2">Correo</label>
                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" maxlength="50" value="<?php echo $_SESSION["correo"]?>" disabled>
            </div>
            <div class="col-4">
                <label for="txtAs" class="form-label lg p-2">Anos de servicio</label>
                <input type="text" class="form-control" id="txtAs" name="txtAs" maxlength="50" value="<?php echo $_SESSION["as"]?>" disabled>
            </div>
            <div class="col-3">
                <label for="txtContra" class="form-label lg p-2">Contrasena</label>
                <input type="text" class="form-control" id="txtContra" name="txtContra" maxlength="50" value="<?php echo $_SESSION["contra"]?>" disabled>
            </div>
            <div class="col-8"></div>
            <div class="col-sm-3 my-3">
                <input type="button" id="btnEditar" class="btn btn-success lg p-2" value="Editar" onclick="habilitarTxt()">
            </div>
            <script>
                function habilitarTxt(){
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
                    document.getElementById("btnGuardar").disabled=false;
                }
            </script>
            <div class="col-sm-3 my-3">
            <input type="button" id="btnGuardar" class="btn btn-primary lg p-2" value="Guardar cambios" disabled>
            </div>
        </form>
            <div class="col-sm-3 my-3">
            <input type="button" class="btn btn-danger lg p-2" value="Cambiar Contrasena" data-bs-toggle='modal' data-bs-target='#exampleModal'>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-light" id="exampleModalLabel">Cambiar Contrasena</h5>
                        <button type="button" class="btn-close text-white bg-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="">
                        <label for="modalid" class="form-label lg p-2">Contrasena Actual</label>
                        <input type="text" class="form-control" id="modalid" name="nombre" maxlength="50" required>
                    </div>
                    <div class="">
                        <label for="modalInputNom" class="form-label lg p-2">Nueva Contrasena</label>
                        <input type="text" class="form-control" id="modalInNom" name="nombre" maxlength="50" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" id="btnActualizar" data-target="" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container my-3">
                <div class="row">
                    <div class="col">
                        <table id="tablaEsp" class="table table-bordered table-striped compact mb-0">
                            <thead>
                                <center>
                                <h3 class="">Mis Pedidos</h3>
                                </center>
                                </thead>
                            <tr>
                                <th>idPedido</th>
                                <th>Fecha del pedido</th>
                                <th>Importe</th>
                                <th>Direccion</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                            <tbody id="bodyPedido">

                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>