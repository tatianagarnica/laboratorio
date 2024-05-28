var usu_id = $('#usu_idx').var();
function init(){
    $('#estudios_form').on("submit",function(e){
        guardaryeditar(e);
    });
}
function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($('#estudios'[0]));
    $. ajax({
        url:"/ARCHIVO/controller/estudios.php?op=guardaryeditar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#estudios_data').DataTable().ajax.reload();
            $('#modalcrearestudios').modal('hide');

            Swal.fire({
                title:'correcto',
                text:'se resgistro correctamente',
                icon:'success',
                confirButtonText:'aceptar'
            })
        }
    });
}
$(document).ready(function(){
    $('#estudios_data').DataTable({
        "aProcessing":true,
        "aServer":true,
        dom:'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/ARCHIVO/controller/estudios.php?op=listar",
            type:"post"
        },
        "bDestroy":true,
        "responsive":true,
        "bInfo":true,
        "iDisplayLength":15,
        "order":[[0,"desc"]],
        "lenguage":{
            "sProcessing":                "procesando...",
            "sLengthMenu":                "mostrar _MENU_ registros",
            "sZeroRecords":               "no se encontraron resultados",
            "sEmptyTable":                "ningun dato disponible en esta tabla",
            "sInfo":                      "mostrando registros del _START_al_END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":                 "mostrando regitros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":              "(filtrado de un total _MAX_ registros)",
            "sInfoPostFix":               "",
            "sSearch":                    "buscar:",
            "sUrl":                       "",
            "sInfoThousands":             ",",
            "sLoadingRecords":            "cargando...",
            "oPaginate":  {
                "sFirst":          "primero",
                "sLast":           "ultimo",
                "sNext":           "siguiente",
                "sPrevious":       "anterior"
            },
            "oAria":{
                "sSortAscending": "activar para ordenar la columna de manera ascendente",
                "sSortDescending": "activar para ordenar la columna de manera descendente"
            }
        },
    });
})
function nuevo(){
    $('#titulo_modal').html('Nuevo Estudio');
    //$('#socialMedia_form')[0].reset();
    $('#modalcrearestudios').modal('show');
}
function editar(est_id){
    $.post("/ARCHIVO/controller/estudios.php.php?op=mostrar",{est_id:est_id},function(data){
        data = JSON.parse(data);
        $('#est_id').val(data.est_id);
        $('#est_titulo').val(data.est_titulo);
        $('#est_lugar').val(data.est_lugar);
        $('#est_anno').val(data.est_anno);
        $('#est_tipo').val(data.est_tipo);
    });
    $('#titulo_modal').html('editar estudios');
    $('#modalcrearestudios').modal('show');
}
function eliminar(est_id){
    Swal.fire({
        title: 'eliminar',
        text: 'deseas eliminar el resgistro?',
        icon:'error',
        showCancelButton:true,
        confirButtonText:'aceptar',
        cancelButtonText:'cancelar'
    }).then((result)=>{
        if (result.value){
            $.post("/ARCHIVO/controller/estudios.php?op=eliminar",{est_id:est_id}, function(data){
                $('#estudios_data').DataTable().ajax.reload();
                Swal.fire({
                    title:'correcto',
                    text:'se elimino correctamente',
                    icon:'success',
                    confirButtonText:'aceptar'
                })
            });
        }
    });
}