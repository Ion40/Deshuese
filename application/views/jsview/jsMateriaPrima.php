<script>
$(document).ready(function () {
    $("#numMatPrim, #numMatPrimedit").numeric();
    $("#searchMain").on("keyup", function () {
        var table = $("#tblMateriaPrima").DataTable();
        table.search(this.value).draw();
    });

   $("#tblMateriaPrima").DataTable({
       responsive: true,
       "autoWidth":false,
       "info": true,
       "sort":false,
       "paging":true,
       "order": [
           [0, "asc"]
       ],
       /*"dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
        },*/
       "pagingType": "full_numbers",
       "lengthMenu": [
           [15,20,100, -1],
           [15,20,100, "Todo"]
       ],
       "language": {
           "info": "Registro _START_ a _END_ de _TOTAL_ recursos",
           "infoEmpty": "Registro 0 a 0 de 0 recursos",
           "zeroRecords": "No se encontro coincidencia",
           "infoFiltered": "(filtrado de _MAX_ registros en total)",
           "emptyTable": "NO HAY DATOS DISPONIBLES",
           "lengthMenu": '_MENU_ ',
           "search": '<i class=" material-icons">search</i>',
           "loadingRecords": "Cargando...",
           "paginate": {
               "first": "Primera",
               "last": "Última ",
               "next": "Siguiente",
               "previous": "Anterior"
           }
       }
   });
});

$("#btnNewMatPrim").click(function () {
    $("#header").html("Nueva Materia Prima");
    $("#Edit,#btnUpdateMat").hide();
    $("#save,#btnSaveMat").show();
    $("#mdlnewMateria").openModal();
});

function editar(id,num,desc) {
    $("#header").html("Editar Materia Prima");
    $("#save,#btnSaveMat").hide();
    $("#Edit,#btnUpdateMat").show();
    $("#mdlnewMateria").openModal();
    $("#Idedit").val(id);
    $("#numMatPrimedit").val(num);
    $("#Descripcionedit").val(desc);
}

$("#btnSaveMat").on("click",function () {
    var form_data = {
        numMatPrim: $("#numMatPrim").val(),
        Descripcion: $("#Descripcion").val()
    };
    $.ajax({
        url: "GuardarMteriaPrima",
        type: "POST",
        data: form_data,
        beforeSend: function(){
        if ($("#numMatPrim").val() == "" || $("#Descripcion").val() == "")
            {
                swal({
                    type: "warning",
                    title: "Campos requeridos",
                    text: "Los campos materia prima y descripción son requeridos"
                });
                $.ajax.abort();
            }
        },
        success: function (data) {
            if (true)
            {
                swal({
                    type: "success",
                    title: "Exito",
                    text: "Datos guardados con éxito"
                }).then(function () {
                    location.reload();
                });
            }
        },
        error: function () {
            swal({
                type: "error",
                title: "Error",
                text: "Error al guardar los datos, comuniquece con el administrador"
            }).then(function () {
                location.reload();
            });
        }
    });
});

$("#btnUpdateMat").on("click",function () {
    var id = $("#Idedit").val();
    var form_data = {
        numMatPrimedit: $("#numMatPrimedit").val(),
        Descripcionedit: $("#Descripcionedit").val()
    };
    $.ajax({
        url: "ActualizarMteriaPrima/"+id,
        type: "POST",
        data: form_data,
        beforeSend: function(){
            if ($("#numMatPrimedit").val() == "" || $("#Descripcionedit").val() == "")
            {
                swal({
                    type: "warning",
                    title: "Campos requeridos",
                    text: "Los campos materia prima y descripción son requeridos"
                });
                $.ajax.abort();
            }
        },
        success: function (data) {
            if (true)
            {
                swal({
                    type: "success",
                    title: "Exito",
                    text: "Datos actualizado con éxito"
                }).then(function () {
                    location.reload();
                });
            }
        },
        error: function () {
            swal({
                type: "error",
                title: "Error",
                text: "Error al actualizar los datos, comuniquece con el administrador"
            }).then(function () {
                location.reload();
            });
        }
    });
});

    function ActualizarEs(id,est)
    {
        var mensaje = "";
        if (est == 1){mensaje = "¿Estas seguro que deseas dar de baja este recurso?";}
        else{mensaje = "¿Estas seguro que deseas restaurar este recurso?";}
        swal({
            text: mensaje,
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#0094ce',
            cancelButtonColor: '#b73a33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
        }).then(function () {
            $.ajax({
                url: "ActualizarEstMteriaPrima/"+id+"/"+est,
                type: "POST",
                success: function () {
                    swal({
                        text: "Estado actualizado",
                        type: "success"
                    }).then(function () {
                        location.reload();
                    });
                }
            });
        });
    }
</script>