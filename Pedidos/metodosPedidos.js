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
                document.getElementById("inPrecio").value=prodDat.precio;
                //document.getElementById("inImporte").value=prodDat.existencias;
                
            }
        });
    });
    
    $('#inCaja').click(function(){
        let tipoFuncion="loadConcepto";
        
        let id;
        if(document.getElementById("inCaja").checked=true){
            id=0;
            console.log("caja");
        }
        
        let parametros={"tipo": tipoFuncion, "id":id}
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
        let id;
        if(document.getElementById("inClanche").checked=true){
            id=1;
            console.log("clanche");
        }
        let parametros={"tipo": tipoFuncion, "id":id}
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
        
        precio=document.getElementById("inPrecio").value;
        if(document.getElementById("inCaja").isChecked=true){
            let caja=0;
            caja=document.getElementById("inConcepto").value;
            caja=caja*12;
            console.log(caja);
            importe=caja*precio;
            console.log(importe);
            //importe=document.getElementById("inImporte").value;
            new Number(importe);
            document.getElementById("inImporte").value=importe;
            console.log(importe);
        }
        if(document.getElementById("inClanche").isChecked=true){
            let clanche=0;
            clanche=document.getElementById("inConcepto").value;
            document.getElementById("inImporte").value=clanche*precio;
        }
    });

});