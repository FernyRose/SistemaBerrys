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
            }
        });
        cargarTabla();
    });

    const dataTableOptions = {
        /*columnDefs:[
            //{ width: "10%", targets: [0] },
            //{ width: "100%", targets: [1,2] },
            //{ orderable: false, targets: [1,2,3] },
            
        ],*/
        language: {
            lengthMenu: "Mostrar _MENU_ registros por pagina",
            zeroRecords: "Ningun usuario encontrado",
            info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Ningun usuario encontrado",
            infoFiltered: "(filtrados desde _MAX_ registros totales)",
            search: "Buscar:",
            loadingRecords: "Cargando ...",
            paginate: {
                first: "Primero",
                last: "Ultimo",
                next: "Siguiente",
                previous: "Anterior",

            }
        },
        //destroy: true,
        //pageLength: 12,
    };

    function cargarTabla(){
        let tipoFuncion="cargarTabla";
        
        let parametros={"tipo": tipoFuncion}
        $.ajax({
            url:'funcionesFruta.php',
            data:parametros,
            type:'POST',
            success:function(response){
                $('#addfruta').html(response);
                $('#tablaPedidos').DataTable(dataTableOptions);
            }
        });
    }

    $('#btnActualizar').click(function(){
        let nombre =document.getElementById('modalInNom').value;
        let idfruta = document.getElementById('modalid').value;
        let tipoFuncion="actualizar";
        let parametros={"tipo":tipoFuncion, "nombre":nombre, "idfruta":idfruta};
        $.ajax({
            url:'funcionesFruta.php',
            data:parametros,
            type:'POST',
            success:function(){
                alert("Cambios guardados correctamente");
                location.reload(true);
            }
        });
    });
        
});