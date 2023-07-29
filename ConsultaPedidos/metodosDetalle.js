$(document).ready(function(){

    let tipoFuncion="detalleData";
        let parametros={"tipo":tipoFuncion};
        $.ajax({
            url:'detallePedido.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#detalletab').html(response);
            }
        });
});