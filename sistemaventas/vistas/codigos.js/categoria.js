var tabla;


function init(){

    mostrarFormulario(false);
    listar();

}

function limpiar(){

    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");

}

function mostrarFormulario(x){

    limpiar();

    if(x){
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("btnGuardar").prop("disabled",false);
        $("#btnAgregar").hide();

    }else{
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnAgregar").show();
    }
}

function cancelarFormulario(){
    limpiar();
    mostrarFormulario(false);

}

function listar(){
    tabla=('#tablalistado').datatable(
        {
            "aProcessing":true,//Se activa el procesamiento del datatables
            "aServerSide":true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla

            buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],

            "ajax":{
                url: '../ajax/categoria.php?op=listar',
                type: "get",
                datatype: "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },

            "tbDestroy": true,
            "iDisplayLength": 5, //Paginación
            "order": [[0, "desc"]]//Ordenar (columna,orden)

        }).DataTable();
}
init();
