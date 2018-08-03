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
                {"data": "Rendimiento_B"}
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

    function printDesh() {
        var num = $("#search").val();
        window.open("PrintDeshuese/"+num,"_blank");
    }
</script>