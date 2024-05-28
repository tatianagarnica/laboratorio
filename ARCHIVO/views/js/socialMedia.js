var usu_id = $('#usu_idx').var();
function init(){
    $('#socialmedia_form').on("submit",function(e){
        guardaryeditar(e);
    });
}
function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($('#socialmedia_from'[0]));
    $. ajax({
        url:"/ARCHIVO/controller/social_media.php?op=guardaryeditar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,

        success: function(data){
            console.log(data);
            $('#socialmedia_data').DataTable().ajax.reload();
            $('#modalcrearredes').modal('hiden');

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
    $('#socialmedia_data').DataTable({
        "aProcessing":true,
        "aServer":true,
        dom:'Bfrtip',
        buttons:[
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/ARCHIVO/controller/social_media.php?op=listar",
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