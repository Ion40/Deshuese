<script>
$(document).ready(function () {
    $("#tblUsuarios").DataTable({
        responsive: true,
        "autoWidth":false,
        "info": true,
        "sort":false,
        "order": [
            [0, "asc"]
        ],
        /*"dom": 'T<"clear">lfrtip',
         "tableTools": {
             "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
         },*/
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10,20,100, -1],
            [10,20,100, "Todo"]
        ],
        "language": {
            "info": "Registro _START_ a _END_ de _TOTAL_ articulos",
            "infoEmpty": "Registro 0 a 0 de 0 articulos",
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

$("#btnNewUser").on("click", function () {
    $("#mdlnewUser").openModal();
});

$("#btnSaveUsers").on("click", function () {
    var form_data = {
        username: $("#username").val(),
        Nombre: $("#Nombre").val(),
        Pass: $("#Pass").val(),
        permiso: $("#permiso option:selected").val()
    };

    $.ajax({
        url: "SaveUsers",
        type: "POST",
        data: form_data,
        beforeSend: function () {
            if ($("#username").val() == "" || $("#Nombre").val() == "" || $("#Pass").val() == ""
                || $("#permiso option:selected").text() == "Selecciona un permiso")
            {
                var toastHTML = '<span>Todos los campos son requeridos! <i class="material-icons left">warning</i></span>';
                Materialize.toast(toastHTML,3000,"rounded amber darken-3");
                $.ajax.abort();
            }
        },
        success: function (data) {
            if (true)
            {
                var toastHTML = '<span>Usuario registrado! <i class="material-icons left">check_circle</i></span>';
                Materialize.toast(toastHTML,3000,"rounded light-blue darken-3",function toastCompleted() {
                    location.reload();
                });
            }
        },
        error:function () {
            var toastHTML = '<span>Error al guardar el usuario! <i class="material-icons left">error</i></span>';
            Materialize.toast(toastHTML,3000,"rounded red darken-3");
        }
    });
});
</script>