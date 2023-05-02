$(document).ready(function(){
    $('#infruta').change(function(){
        let tipoFuncion="loadFruta";
        let id=document.getElementById("infruta").value;
        let parametros={"tipo": tipoFuncion, "id":id}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                let prodDat=JSON.parse(response);
                document.getElementById("inPrecio1").value=prodDat.precio1;
                document.getElementById("inPrecio2").value=prodDat.precio2;
            }
        });
    });
    
    $('#inCaja').click(function(){
        let tipoFuncion="loadConcepto";
        let id=document.getElementById('infruta').value;
        let concepto;
        if(document.getElementById("inCaja").checked){
            concepto="caja";
            console.log("caja");
        }
        
        let parametros={"tipo": tipoFuncion, "id":id, "concepto":concepto}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $("#inConcepto").html(response);
            }
        });
    });
    $('#inClanche').click(function(){
        let tipoFuncion="loadConcepto";
        let id=document.getElementById("inFruta");
        let concepto;
        if(document.getElementById("inClanche").checked){
            concepto="clanche";
            console.log("clanche");
        }
        let parametros={"tipo": tipoFuncion, "id":id, "concepto":concepto}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $("#inConcepto").html(response);   
            }
        });
    });

    $('#inConcepto').change(function(){
        let precio=0;
        var importe=0;
        if(document.getElementById("inCaja").checked){
            console.log("entro en cajas");
            caja=document.getElementById("inConcepto").value;
            precio=document.getElementById("inPrecio1").value;
            importe=caja*precio;
            new Number(importe);
            document.getElementById("inImporte").value=importe;
            console.log(importe);
        }
        if(document.getElementById("inClanche").checked){
            console.log("entro en clanches");
            let clanche=0;
            clanche=document.getElementById("inConcepto").value;
            document.getElementById("inImporte").value=clanche*document.getElementById("inPrecio2").value;
        }
    });

    $('#btnAgregar').click(function(){
        let id=document.getElementById("infruta").value;
        let precio=0;
        let importe=document.getElementById("inImporte").value;
        let cantidad = document.getElementById("inConcepto").value;
        let concepto="";
        if(document.getElementById("inCaja").checked){
            concepto="Cajas";
            precio=document.getElementById("inPrecio1").value;
        }
        if(document.getElementById("inClanche").checked){
            concepto="Clanche";
            precio=document.getElementById("inPrecio2").value;
        }
        let tipoFuncion="agregarTabla";
        let parametros={"tipo": tipoFuncion, "id":id, "precio":precio, "importe":importe, "concepto":concepto, "cantidad":cantidad}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addPedidos').html(response);
            }
        });
    });

    $('#btnGuardar').click(function(){
        let id=0;
        let tipoFuncion="guardar"
        let parametros={"tipo": tipoFuncion, "id":id}
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                console.log(response);
                
        }
        });
    });

});