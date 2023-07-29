<div class="col-4">
            <label for="txtNombre" class="form-label lg p-2">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" maxlength="50" value="<?php echo $_SESSION['nombre']?>">
        </div>
        <div class="col-4">
            <label for="txtDir" class="form-label lg p-2">Contrasena</label>
            <input type="text" class="form-control" id="txtDir" name="txtDir" maxlength="50" value="<?php echo $_SESSION["contra"]?>">
        </div>