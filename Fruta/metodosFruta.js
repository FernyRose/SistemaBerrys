$(document).ready(function(){

    cargarTabla();
    $('#btnAgregar').click(function(){
        let nom=document.getElementById("inNom").value;
        let tipoFuncion="guardar";
        if(nom.length>20){
            alert("El Campo nombre no es valido");
            return;
        }
        let parametros={"tipo": tipoFuncion, "nombre":nom}
        $.ajax({
            url:'funcionesFruta.php',
            data:parametros,
            type:'POST',
            success:function(response){
                console.log(response);
                cargarTabla();
            }
        });
    });

    function cargarTabla(){
        let tipoFuncion="cargarTabla";
        
        let parametros={"tipo": tipoFuncion}
        $.ajax({
            url:'funcionesFruta.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addfruta').html(response);
                $('#tablaPedidos').DataTable();
            }
        });
    }

});