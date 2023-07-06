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
        });
        cargarTabla();
    });

    const dataTableOptions = {
        columnDefs:[
            { width: "10%", targets: [0,3,4,5,6,7] },
            //{ width: "10%", targets: [1,2,3] },
            //{ orderable: false, targets: [1,2,3] },
            
        ],
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
        pageLength: 8,
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
                $('#tablaPre').DataTable(dataTableOptions);
            }
        });
    }

});