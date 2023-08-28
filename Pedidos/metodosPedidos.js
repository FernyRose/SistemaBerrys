$(document).ready(function(){
    
    $('#btnAgregar').click(function(){
        let txtidpre=document.getElementById("txtPre");
        let idPre=txtidpre.getAttribute("data-idpre");
        let txtPrecio=document.getElementById("txtPrecio");
        let precio=txtPrecio.getAttribute("data-txtPrecio");
        let tipoFuncion="agregarCarrito";
        let parametros={"tipo": tipoFuncion, 
                        "idPre":idPre,
                        "precio":precio,
                        }
        $.ajax({
            url:'funcionesPedidos.php',
            data:parametros,
            type:'POST',
            success:function(response){
                
        }
        });
    });
});