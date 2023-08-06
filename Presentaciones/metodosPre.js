$(document).ready(function(){

    function comboFrutas(){
        let tipoFuncion="comboFrutas";
        let parametros={"tipo":tipoFuncion};
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#comboFruta').html(response);
            }
        });
    }

    function dataEspe(){
        let tipoFuncion="dataEspe";
        let idfruta=document.getElementById("comboespe").value;
        let parametros={"tipo":tipoFuncion, "idfruta":idfruta};
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let espeDat=JSON.parse(response);
                document.getElementById("inCal").value=espeDat.calidad;
                document.getElementById("inCali").value=espeDat.calibre;
            }
        });
    }

    function comboEspe(){
        let tipoFuncion="comboEspe";
        let idfruta=document.getElementById("comboFruta").value;
        let parametros={"tipo":tipoFuncion, "idfruta":idfruta};
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#comboEspe').html(response);
            }
        });
    }
    

    comboFrutas();
    cargarTabla();

    $('#comboFruta').change(function(){
        comboEspe();
    });

    $('#comboEspe').change(function(){
        dataEspe();
    });

    function dataEspe(){
        let tipoFuncion="dataEspe";
        let idespe=document.getElementById("comboEspe").value;
        let parametros={"tipo":tipoFuncion, "idespe":idespe};
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let espeDat=JSON.parse(response);
                document.getElementById("inCal").value=espeDat.calidad;
                document.getElementById("inCali").value=espeDat.calibre;
            }
        });
    }
    const dataTableOptions = {
        destroy: true
    };
    const dataTableOptions2 = {
        pageLength: 10
    };
    
    function cargarTabla(){
        let tipoFuncion="cargarTabla";
        let parametros={"tipo": tipoFuncion}
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addPre').html(response);
                $('#tablaPre').DataTable();
            }
        });
    }

    $('#btnActualizar').click(function(){
        let nombre =document.getElementById('modalnombre').value;
        let precio =document.getElementById('modalprecio').value;
        let exi =document.getElementById('modalexi').value;
        let idprese = document.getElementById('modalid').value;
        let tipoFuncion="actualizar";
        let parametros={"tipo":tipoFuncion, "nombre":nombre, "precio":precio, "exi":exi, "idprese":idprese};
        $.ajax({
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(){
                //alert("Cambios guardados correctamente");
                location.reload(true);
            }
        });
    });

});