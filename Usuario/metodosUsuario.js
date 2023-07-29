$(document).ready(function(){
        let txtid=document.getElementById("txtNombre");
        let id=txtid.getAttribute("data-idusuario");
        let tipoFuncion="dataUsuario";
        let parametros={"tipo": tipoFuncion, "id":id}
        $.ajax({
            url:'funcionesUsuario.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let data=JSON.parse(response);
                document.getElementById("txtNombre").value=data.nombre;
                document.getElementById("txtDir").value=data.direccion;
                document.getElementById("txtCp").value=data.cp;
                document.getElementById("txtCiudad").value=data.ciudad;
                document.getElementById("txtEstado").value=data.estado;
                document.getElementById("txtTel").value=data.tel;
                document.getElementById("txtTelp").value=data.telp;
                document.getElementById("txtCorreo").value=data.correo;
                document.getElementById("txtAs").value=data.as;
                document.getElementById("txtContra").value=data.contra;
            }
        });
});