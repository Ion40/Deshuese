<script>
    $(document).ready(function () {
        $("#search").numeric();
    });
    $("#NumDes").click(function () {
        $("#modal1").openModal();
        $("#headerReport").html("Reporte por número de Deshuese");

    });

    $("#btnConsultar").on("click", function () {
        var num = $("#search").val();
        if (num == "")
        {
            swal({
            text: "Ingrese un numero de deshuese para efectuar la consulta!",
            type: "info"
        });
        }else{
            recorrer(num);
            $("#tblReporteDH").DataTable({
                "ajax": "GetDeshuese/" + num,
                "destroy": true,
                "ordering": false,
                "paging": false,
                "info":false,
                "searching": false,
                "columns": [
                    {"data": "Materia_Prima"},
                    {"data": "Kilos"},
                    {"data": "Calculo_Base"},
                    {"data": "Valor_Total_Mercado"},
                    {"data": "Rendimiento_D"},
                    {"data": "Total_Actual"},
                    {"data": "Costo_Unitario"},
                    {"data": "Rendimiento_B"},
                    {"data": "Prec_Ant_Kilo"},
                    {"data": "Prec_Act_Kilo"},
                    {"data": "Dif"}
                ],
                "initComplete": function () {
                    var table = $('#tblReporteDH').DataTable().column(3).data().sum();
                    var redniPercent = $('#tblReporteDH').DataTable().column(4).data().sum();
                    var rendi = $('#tblReporteDH').DataTable().column(7).data().sum();
                    var sumkilos = $('#tblReporteDH').DataTable().column(1).data().sum();
                    var CostoT = $('#tblReporteDH').DataTable().column(5).data().sum();

                    $("#ValTotalSum").html(table);
                    $("#RendiTotalSum").html(rendi.toFixed(2));
                    $("#totalPorcentaje").html(redniPercent.toFixed(0));
                    $("#sumKilos").html(sumkilos.toFixed(3));
                    $("#CostoT").html(CostoT.toFixed(3));
                }
            });
        }
    });

    function recorrer(num)
    {
        $.ajax({
            url: "GetDeshueseHeader/"+num,
            type: "GET",
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(datos)
            {
                if (true)
                {
                    $.each( datos, function( key, value ) {
                        $("#spanNoDH").html(value[0].No_DH);
                        $("#spanDescDH").html(value[0].Descripcion_DH);
                        $("#spanMasaDH").html(value[0].Precio_Bruto);
                        $("#spanFechaDH").html(value[0].Fecha);
                        $("#spanCosto").html(value[0].Costo_Total);
                        $("#spanMOD").html(value[0].Gasto_MOD);
                        $("#spanGI").html(value[0].GI);
                    });
                }else {
                    $("#spanNoDH").html("");
                    $("#spanDescDH").html("");
                    $("#spanMasaDH").html("");
                    $("#spanFechaDH").html("");
                    $("#spanCosto").html("");
                }
            }
        });
    }

    function printDesh()
    {
        var num = $("#search").val();
       if (num == "")
       {
          swal({
              text: "Aun no ha ingresado un número de deshuese",
              type: "info"
          });
       }else{
           window.open("PrintDeshuese/"+num,"_blank");
       }
    }

    /**************************************************************************/
$("#disRecursos").click(function () {
    $("#modal2").openModal();
});

$("#btnConsultarDis").on("click", function () {
    var fecha = $("#fechaDis").val();
    if(fecha == "")
    {
        swal({
            text: "Ingrese una fecha para efectuar la consulta!",
            type: "info"
        });
    }else{
        recorrerDis(fecha);
        $("#tblReporteDist").DataTable({
            "ajax": "GetDistRecursos/" + fecha,
            "destroy": true,
            "ordering": false,
            "paging": false,
            "info":false,
            "searching": false,
            "columns": [
                {"data": "Materia_Prima"},
                {"data": "Descripcion"},
                {"data": "Valor_Kg"},
                {"data": "Porcentaje_Apli"}
            ]
        });
    }
});

    function recorrerDis(fecha)
    {
        $.ajax({
            url: "GetDistRecursos/"+fecha,
            type: "GET",
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(datos)
            {
                if (true)
                {
                    $.each( datos, function( key, value ) {
                        $("#spanFechaDis").html(value[0].Fecha_Distribucion);
                        $("#spanMasaDis").html(value[0].Masa_Obtenida);
                        $("#spanTotalKil").html(value[0].ValorKg);
                        $("#spanTotaApli").html(value[0].Porcentaje+"%");
                    });
                }else {
                    $("#spanFechaDis").html("");
                    $("#spanMasaDis").html("");
                    $("#spanTotalKil").html("");
                    $("#spanTotaApli").html("");
                }
            }
        });
    }

    function printDist()
    {
        var fecha = $("#fechaDis").val();
        if (fecha == "")
        {
            swal({
                text: "Aun no ha ingresado una fecha de distribucion",
                type: "info"
            });
        }else{
            window.open("PrintDistribucionRec/"+fecha,"_blank");
        }
    }

    /*********************************************************************************************** */
    $("#Rangos").click(function () {
        $("#modal3").openModal();
      });

    $("#btnConsultarRangos").on("click", function () {
        var fecha1 = $("#fecha1").val(), fecha2 = $("#fecha2").val();
        if(fecha1 == "" && fecha2 == ""){
            swal({
                text: "Debe ingresar una fecha de inicio y una fecha final para efectuar la consulta",
                type: "info"
            });
        }else if(fecha1 == ""){
            swal({
                text: "Debe ingresar una fecha de inicio",
                type: "info"
            });
        }else if(fecha2 == ""){
            swal({
                text: "Debe ingresar una fecha final",
                type: "info"
            });
        }else{
            $("#tblReporteRangos").DataTable({
                "ajax": "GetDeshueseXFechas/"+fecha1+"/"+fecha2,
                "destroy": true,
                "paging": false,
                "ordering": false,
                "info": false,
                "columns":[
                    {"data":"No_DH"},
                    {"data":"Fecha"},
                    {"data":"Descripcion_DH"},
                    {"data":"Precio_Bruto"},
                    {"data":"Costo_Total"},
                    {"data": "Print"}
                ]
            });
        }
     });

     function printDeshRango(No_DH)
    {
        window.open("PrintDeshuese/"+No_DH,"_blank");
    }

function printDeshXFechas() {
  var fecha1 = $("#fecha1").val(),
    fecha2 = $("#fecha2").val();
  if (fecha1 == "" && fecha2 == "") {
    swal({
      text: "Debe ingresar una fecha de inicio y una fecha final para efectuar la consulta",
      type: "info"
    });
  } else if (fecha1 == "") {
    swal({
      text: "Debe ingresar una fecha de inicio",
      type: "info"
    });
  } else if (fecha2 == "") {
    swal({
      text: "Debe ingresar una fecha final",
      type: "info"
    });
  } else {
    window.open("PrintDeshueseRango/" + fecha1 + "/" + fecha2, "_blank");
  }
}

</script>
