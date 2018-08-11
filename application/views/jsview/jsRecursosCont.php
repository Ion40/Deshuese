<script type="text/javascript">
$(document).ready(function () {
  $("#tblDistRecursosCont").DataTable({
    "info": false,
    "paging": false,
    "ordering": false
  });
});

  $("#btnNewDistribucionCont").on("click", function() {
     $("#mdlnewDRecursosCont").openModal();
});

$("#btnCalcular").click(function () {
  var table = $("#tblDistRecursosCont").DataTable();
  var vacaciones = 0, treceavo = 0, inatec = 0, inss = 0, mod = 0;
  vacaciones = $("#Salario").val() * 0.025;
  treceavo = $("#Salario").val() * 0.025;
  inatec = $("#Salario").val() * 0.02;
  inss = $("#Salario").val() * 0.19;
  mod = vacaciones + treceavo + inatec + inss + parseInt($("#Salario").val());
  if ($("#Salario").val() != "") {
    if (table.rows().count() == 1) {
      swal({
        text: "Solo se puede hacer un calculo a la vez",
        type: "warning"
      });
    }else{
      table.row.add([
        vacaciones,
        treceavo,
        inatec,
        inss,
        mod
      ]).draw(false);
    }
  }else{
    swal({
      text: "Debe proporcionar un Salario Basico para hacer el calculo",
      type: "info"
    });
  }
});

$("#btnSaveDistribucionCont").on("click", function () {
  var tabla = $("#tblDistRecursosCont").DataTable();
  var i = 0;
  var datos = new Array();
  tabla.rows().eq(0).each(function (index) {
    var row = tabla.row(index);
    var data = row.data();
    datos[i] = $("#Salario").val()+","+data[0]+","+data[1]+","+data[2]+","+data[3]+","+data[4]+","+$("#GIL").val();
    i++;
  });

  var form_data = {
    array : datos
  };

  $.ajax({
    url: "SaveDistribucionCont",
    type: "POST",
    data: form_data,
    beforeSend: function () {
      if ($("#Salario").val() == "" || $("#GIL").val() == "") {
        swal({
          text: "Los campos Salario Basico y Gasto indirecto por libra son requeridos!",
          type: "warning",
          allowOutsideClick: false
        });
        $.ajax.abort();
      }else if (tabla.rows().count() == 0) {
        swal({
          text: "La tabla no contiene datos!",
          type: "warning",
          allowOutsideClick: false
        });
        $.ajax.abort();
      }
    },
    success: function (data) {
      if (true) {
        swal({
          text: "Datos almacenados con éxito",
          type: "success",
          allowOutsideClick: false
        }).then(function () {
          location.reload();
        });
      }
    },
    error: function (){
      swal({
        text: "Error al almacenar los datos, recargue la pagina e intente de nuevo. "+
        "Si este mensaje sigue apareciendo contáctece con el desarrollador.",
        type: "error",
        allowOutsideClick: false
      });
    }
  });
});
</script>
