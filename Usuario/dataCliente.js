$(document).ready(function(){
    let tipo="llenarTabla";
    let parametros={"tipo": tipo} 
    $.ajax({
        url:'funcionesUsuario.php',
        data:parametros,
        type:'POST',
        success:function(response){
        $("#bodyPedido").html(response);
        }
    });

    $("#btnContra").click(function(){
        let contraActual=document.getElementById("txtActual").value;
        let contraNueva=document.getElementById("txtNueva").value;
        let tipo="contra";
        let parametros={"contraActual": contraActual, "contraNueva": contraNueva, "tipo": tipo}
        $.ajax({
            url:'funcionesUsuario.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let dat=JSON.parse(response);
                let ban=dat.bandera;
                console.log(ban);
                if(ban==1){
                    alert("Cambios realizados");
                    location.reload(true);
                }
                else{
                    alert("La contrasena es incorrecta");
                }
            }
        });
    });
});