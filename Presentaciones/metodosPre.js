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


    $('#btnRegistrar').click(function(){
        let idfruta=document.getElementById("comboFruta").value;
        let idespe=document.getElementById("comboEspe").value;
        let precio=document.getElementById("inPre").value;
        let exi=document.getElementById("inEx").value;
        let nombre=document.getElementById("inNom").value;
        let tipoFuncion="Registrar";
        let parametros={"tipo": tipoFuncion, "idfruta":idfruta, "idespe":idespe, "precio":precio, "exi":exi, "nombre":nombre}
        $.ajax({
            url:'funcionesPre.php',
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
            url:'funcionesPre.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addPre').html(response);
            }
        });
    }

});