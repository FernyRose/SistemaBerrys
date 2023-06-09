$(document).ready(function(){
    function loadFruta(){
        let tipo="loadFruta";
        let parametros={"tipo": tipo}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#inFruta').html(response);
            }
        });
    }
    loadFruta();
    
    $('#inFruta').change(function(){
        let idfruta=document.getElementById("inFruta").value;
        let tipo="loadEspe";
        let parametros={"tipo": tipo, "idfruta":idfruta}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#inEsp').html(response);
            }
        });
    });
    $('#inEsp').change(function(){
        let idfruta=document.getElementById("inFruta").value;
        let idespe=document.getElementById("inEsp").value;
        let tipo="loadPrese";
        let parametros={"tipo": tipo, "idfruta":idfruta, "idespe":idespe}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#inPre').html(response);
            }
        });
    });

    $('#inPre').change(function(){
        let tipo="mostrarPrecio";
        let idprese=document.getElementById("inPre").value;
        let parametros={"tipo": tipo,"idprese":idprese}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let data=JSON.parse(response);
                let precio=data.precio;
                let cantidad=document.getElementById("inCant").value;
                document.getElementById("inPrecio").value=precio;
                document.getElementById("inImporte").value=precio*cantidad;
            }
        });
    });
    $('#inCant').change(function(){
        let precio=document.getElementById("inPrecio").value;
        let cantidad=document.getElementById("inCant").value;
        document.getElementById("inImporte").value=precio*cantidad;
    });
    
    $('#btnAgregar').click(function(){
        let idfruta=document.getElementById("inFruta").value;
        let idespe=document.getElementById("inEsp").value;
        let idprese=document.getElementById("inPre").value;
        let precio=document.getElementById("inPrecio").value;
        let cantidad=document.getElementById("inCant").value;
        let importe=document.getElementById("inImporte").value;
        let comboFruta=document.getElementById("inFruta");
        let comboEsp=document.getElementById("inEsp");
        let comboPre=document.getElementById("inPre");
        let textFruta = comboFruta.options[comboFruta.selectedIndex].text;
        let textEsp = comboEsp.options[comboEsp.selectedIndex].text;
        let textPre = comboPre.options[comboPre.selectedIndex].text;
        let tipoFuncion="agregarTabla";
        let parametros={"tipo": tipoFuncion, 
                        "idfruta":idfruta,
                        "idespe":idespe,
                        "idprese":idprese, 
                        "precio":precio, 
                        "cantidad":cantidad, 
                        "importe":importe,
                        "textFruta":textFruta,
                        "textEsp":textEsp,
                        "textPre":textPre,
                    }
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $("#addPedido").html(response);
        }
        });
    });

    $('#btnGuardar').click(function(){
        let tipo="Guardar";
        let parametros={"tipo": tipo}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST'
        });
    });

});