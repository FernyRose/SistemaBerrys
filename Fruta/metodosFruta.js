$(document).ready(function(){

    $('#btnAgregar').click(function(){
        let nom=document.getElementById("inNom").value;
        let tipoFuncion="guardar";
        console.log("paso por aqui");
        let parametros={"tipo": tipoFuncion, "nombre":nom}
        $.ajax({
            url:'funcionesFruta.php',
            data:parametros,
            type:'POST',
            success:function(response){
                console.log(response);
            }
        });
        cargarTabla();
        console.log("paso por aqui 2");
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
                console.log("paso por aqui 3");
            }
        });
    }

});