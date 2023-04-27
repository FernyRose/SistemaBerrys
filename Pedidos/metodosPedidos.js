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
    $('#inCantidadClanche').change(function(){
        let importe=0;
                let clanche=0;
                let caja=0;
                let precio=0;
                precio=document.getElementById("inPrecio").value;
                clanche=document.getElementById("inCantidadClanche").value;
                caja=document.getElementById("inCaja").value*12;
                importe=clanche*precio;
                importe=importe+caja*precio;
                document.getElementById("inImporte").value=importe;
    })
    $('#inCantidadCaja').change(function(){
        let importe=0;
                let clanche=0;
                let caja=0;
                let precio=0;
                precio=document.getElementById("inPrecio").value;
                clanche=document.getElementById("inCantidadClanche").value;
                caja=document.getElementById("inCaja").value*12;
                importe=clanche*precio;
                importe=importe+caja*precio;
                document.getElementById("inImporte").value=importe;
    })
})