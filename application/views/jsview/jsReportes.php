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
    $("#tblReporteDH").DataTable({
        "ajax": "GetDeshuese/"+num,
        "destroy": true,
        "ordering":false,
        "paging":false,
        "columns":[
            {"data" : "Materia_Prima"},
            {"data" : "Kilos"},
            {"data" : "Calculo_Base"},
            {"data" : "Valor_Total_Mercado"},
            {"data" : "Rendimiento_D"},
            {"data" : "Total_Actual"},
            {"data" : "Costo_Unitario"},
            {"data" : "Rendimiento_B"}
        ],
        "initComplete": function () {
            alert(data.Kilos);
        }
    });
});
</script>