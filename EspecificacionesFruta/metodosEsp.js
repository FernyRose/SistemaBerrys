$(document).ready(function(){

    function comboFrutas(){
        let tipoFuncion="comboFrutas";
        let parametros={"tipo":tipoFuncion};
        $.ajax({
            url:'funcionesEsp.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#comboFruta').html(response);
            }
        });
    }

    comboFrutas();
    cargarTabla();
    $('#btnRegistrar').click(function(){
        let idfruta=document.getElementById("comboFruta").value;
        let calibre=document.getElementById("inCali").value;
        let calidad=document.getElementById("inCal").value;
        let tipoFuncion="Registrar";
        let parametros={"tipo": tipoFuncion, "idfruta":idfruta, "calibre":calibre, "calidad":calidad}
        $.ajax({
            url:'funcionesEsp.php',
            data:parametros,
            type:'POST',
            success:function(response){
                console.log(response);
            }
        });
        cargarTabla();
    });

    function cargarTabla(){
        let tipoFuncion="cargarTabla";
        
        let parametros={"tipo": tipoFuncion}
        $.ajax({
            url:'funcionesEsp.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addEsp').html(response);
                $('#tablaEsp').DataTable();
            }
        });
    }

});