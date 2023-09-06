$(document).ready(function(){

    function cargarTabla(){
        let tipoFuncion="cargarTabla";
        let parametros={"tipo": tipoFuncion}
        $.ajax({
            url:'funcionesSurtidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addpedido').html(response);
                $('#tablaPedidos').DataTable();
            }
        });
    }
    cargarTabla();
});