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
});