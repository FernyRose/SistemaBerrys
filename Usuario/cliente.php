<div class="col-4">
            <label for="txtNombre" class="form-label lg p-2">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" maxlength="50" value="<?php echo $_SESSION['nombre']?>">
        </div>
        <div class="col-4">
            <label for="txtDir" class="form-label lg p-2">Direccion</label>
            <input type="text" class="form-control" id="txtDir" name="txtDir" maxlength="50" value="<?php echo $_SESSION["direccion"]?>">
        </div>
        <div class="col-4">
            <label for="txtCp" class="form-label lg p-2">Codigo postal</label>
            <input type="text" class="form-control" id="txtCp" name="txtCp" maxlength="50" value="<?php echo $_SESSION["cp"]?>">
        </div>
        <div class="col-4">
            <label for="txtCiudad" class="form-label lg p-2">Ciudad</label>
            <input type="text" class="form-control" id="txtCiudad" name="txtCiudad" maxlength="50" value="<?php echo $_SESSION["ciudad"]?>">
        </div>
        <div class="col-4">
            <label for="txtEstado" class="form-label lg p-2">Estado</label>
            <input type="text" class="form-control" id="txtEstado" name="txtEstado" maxlength="50" value="<?php echo $_SESSION["estado"]?>">
        </div>
        <div class="col-4">
            <label for="txtTel" class="form-label lg p-2">Telefono Personal</label>
            <input type="text" class="form-control" id="txtTel" name="txtTel" maxlength="50" value="<?php echo $_SESSION["tel"]?>">
        </div>
        <div class="col-4">
            <label for="txtTelp" class="form-label lg p-2">Telefono Privado</label>
            <input type="text" class="form-control" id="txtTelp" name="txtTelp" maxlength="50" value="<?php echo $_SESSION["telp"]?>">
        </div>
        <div class="col-4">
            <label for="txtCorreo" class="form-label lg p-2">Correo</label>
            <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" maxlength="50" value="<?php echo $_SESSION["correo"]?>">
        </div>
        <div class="col-4">
            <label for="txtAs" class="form-label lg p-2">Anos de servicio</label>
            <input type="text" class="form-control" id="txtAs" name="txtAs" maxlength="50" value="<?php echo $_SESSION["as"]?>">
        </div>
        <div class="col-4">
            <label for="txtContra" class="form-label lg p-2">Contrasena</label>
            <input type="text" class="form-control" id="txtContra" name="txtContra" maxlength="50" value="<?php echo $_SESSION["contra"]?>">
        </div>
        <div class="col-12">
            <br>
            <input type="button" class="btn btn-primary lg p-2" value="Guardar cambios">
            <br>
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
                            <th>importe</th>
                            <th>Opciones</th>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>